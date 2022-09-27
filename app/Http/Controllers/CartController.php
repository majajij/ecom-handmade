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
            $request->session()->flash('alert', ['type' => 'success', 'message' => 'Article added successfully']);
        } catch (\Throwable $th) {
            $request->session()->flash('alert', ['type' => 'error', 'message' => $th]);
            return redirect('404');
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
            return redirect('404');
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
            $request->session()->flash('alert', ['type' => 'error', 'message' => $th]);
            return redirect('404');
        }

        return view('cart');
    }
}
