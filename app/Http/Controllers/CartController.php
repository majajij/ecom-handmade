<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        try {
            Cart::add($request->prd_id, $request->prd_name, $request->prd_qty, $request->prd_price, ['image' => $request->prd_image]);
        } catch (\Throwable $th) {
            throw $th;
        }

        $request->session()->flash('alert', ['type' => 'success', 'message' => 'Article added successfully']);
        return response()->json(Cart::content(), 200);
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
        // dd(Cart::content());
        return view('cart');
    }
}
