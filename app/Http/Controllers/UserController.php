<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class UserController extends Controller
{
    public function getMyAccount()
    {
        $orders = Order::where('user_id', auth()->user()->id)->get();
        return view('my-account', compact('orders'));
    }
}
