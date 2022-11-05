<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Omnipay\Omnipay;
use App\Models\Payment;

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
                    'amount' => $request->amount,
                    'currency' => config('paypal.credentials.currency'),
                    'returnUrl' => url('success?ORDER_ID=' . $request->amount),
                    'cancelUrl' => url('error'),
                ])
                ->send();

            if ($response->isRedirect()) {
                $response->redirect();
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
                $arr = $response->getData();

                Payment::create([
                    'payment_id' => $arr['id'],
                    'payer_id' => $arr['payer']['payer_info']['payer_id'],
                    'payer_email' => $arr['payer']['payer_info']['email'],
                    'amount' => $arr['transactions'][0]['amount']['total'],
                    'currency' => config('paypal.credentials.currency'),
                    'payment_status' => $arr['state'],
                ]);

                return 'Payment is successfull. Your transaction ID is :' . $arr['id'];
            } else {
                return $response->getMessage();
            }
        } else {
            return 'Payment declined';
        }
    }

    public function error(Request $request)
    {
        return 'User declined the payment';
    }
}
