<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Models\Country;
use Illuminate\Support\Facades\Http;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        try {
            Cart::add($request->prd_id, $request->prd_name, $request->prd_qty, $request->prd_price, ['image' => $request->prd_image]);
            $request->session()->flash('alert', ['type' => 'success', 'message' => 'Article added successfully']);
        } catch (\Throwable $th) {
            $request->session()->flash('alert', ['type' => 'error', 'message' => $th->getMessage()]);
            // return redirect('404');
        }

        return response()->json(Cart::content(), 200);
    }

    public function removeFromCart(Request $request, $id)
    {
        try {
            Cart::remove($id);
            $request->session()->flash('alert', ['type' => 'success', 'message' => 'Article removed successfully']);
        } catch (\Throwable $th) {
            $request->session()->flash('alert', ['type' => 'error', 'message' => $th->getMessage()]);
            // return redirect('404');
        }

        return redirect('cart');
    }

    public function showCart(Request $request)
    {
        // dd(Cart::content());
        return view('cart');
    }

    public function getContentCart(Request $request)
    {
        // dd(Cart::content());
        return view('cart');
    }

    public function clearCart(Request $request)
    {
        Cart::destroy();
        return redirect('cart');
    }

    public function updateCart(Request $request)
    {
        try {
            Cart::update($request->prd_row_id, $request->prd_qty);
            $request->session()->flash('alert', ['type' => 'success', 'message' => 'Article updated successfully']);
        } catch (\Throwable $th) {
            $request->session()->flash('alert', ['type' => 'error', 'message' => $th->getMessage()]);
            // return redirect('404');
        }

        return view('cart');
    }

    public function checkout()
    {
        // try {
        //     if ($request->isMethod('post')) {
        //         $response = Http::post('http://127.0.0.1:9000/api/payment', [
        //             'order_id' => 2,
        //             'amount' => 100,
        //         ]);

        //         if ($response->successful()) {
        //             // if ($response->isRedirect()) {
        //             //     $response->redirect();
        //             // } else {
        //             //     return $response->getMessage();
        //             // }
        //             // dd($response);
        //             return $response;
        //             // $request->session()->flash('alert', ['type' => 'success', 'message' => 'payment successful']);
        //         }
        //         if ($response->failed()) {
        //             $request->session()->flash('alert', ['type' => 'error', 'message' => 'payment failed']);
        //         }

        //         // dd($request);
        //     } else {
        $countries = Country::all();
        return view('checkout', compact('countries'));
        // }

        // dd('checkout');
        // Cart::update($request->prd_row_id, $request->prd_qty);
        // $request->session()->flash('alert', ['type' => 'success', 'message' => 'Article updated successfully']);
        // } catch (\Throwable $th) {
        //     $request->session()->flash('alert', ['type' => 'error', 'message' => $th->getMessage()]);
        // }

        // return redirect('/');
    }
}
