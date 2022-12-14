<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Omnipay\Omnipay;
use App\Models\Payment;
use App\Models\Order;
use Cart;

class PaymentController extends Controller
{
    private $gateway;

    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(config('paypal.credentials.client_id'));
        $this->gateway->setSecret(config('paypal.credentials.client_secret'));
        $this->gateway->setTestMode(true);
    }

    public function pay(Request $request)
    {
        try {
            $response = $this->gateway
                ->purchase([
                    'amount' => Cart::total(),
                    'currency' => config('paypal.credentials.currency'),
                    'returnUrl' => url('success?') . http_build_query($request->all(), null, '&', PHP_QUERY_RFC3986),
                    'cancelUrl' => url('error'),
                ])
                ->send();

            if ($response->isRedirect()) {
                return $response->redirect();
            } else {
                return $response->getMessage();
            }
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function success(Request $request)
    {
        if ($request->input('paymentId') && $request->input('PayerID')) {
            $transaction = $this->gateway->completePurchase([
                'payer_id' => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId'),
            ]);

            $response = $transaction->send();

            if ($response->isSuccessful()) {
                $order = Order::create([
                    'user_id' => auth()->user()->id,
                    'country_id' => $request->input('country'),
                    'first_name' => $request->input('first_name'),
                    'last_name' => $request->input('last_name'),
                    'company' => $request->input('company'),
                    'address' => $request->input('address'),
                    'city' => $request->input('city'),
                    'state' => $request->input('state'),
                    'postcode' => $request->input('postcode'),
                    'phone' => $request->input('phone'),
                    'email' => $request->input('email'),
                    'notes' => $request->has('notes') ? $request->input('notes') : '',
                    'status' => 'Processing',
                    'amount' => Cart::total(),
                ]);

                if ($order) {
                    $order_product = [];
                    foreach (Cart::content() as $product) {
                        array_push($order_product, [
                            'product_id' => $product->id,
                            'qty' => $product->qty,
                        ]);
                    }

                    $order->products()->attach($order_product);

                    $arr = $response->getData();

                    $order_id = Payment::create([
                        'payment_id' => $arr['id'],
                        'order_id' => $order->id,
                        'payer_id' => $arr['payer']['payer_info']['payer_id'],
                        'payer_email' => $arr['payer']['payer_info']['email'],
                        'amount' => $arr['transactions'][0]['amount']['total'],
                        'currency' => config('paypal.credentials.currency'),
                        'payment_status' => $arr['state'],
                    ]);
                }

                $request->session()->flash('alert', ['type' => 'success', 'message' => 'Payment is successfull. Your transaction ID is :' . $arr['id']]);
            } else {
                return $response->getMessage();
            }
        } else {
            return 'Payment declined';
        }

        return redirect('/');
    }

    public function error(Request $request)
    {
        return 'User declined the payment';
    }
}
