<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function getMyAccount()
    {
        $orders = Order::where('user_id', auth()->user()->id)->get();
        return view('my-account', compact('orders'));
    }

    public function updateUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'birthday' => ['required'],
        ]);

        if ($validator->fails()) {
            $msg = '';
            foreach ($validator->errors()->getMessages() as $key => $errors) {
                $msg .= '<b>' . $key . ':</b><br>';
                $msg .= join('<br>', $errors);
                $msg .= '<br>';
            }

            $request->session()->flash('alert', ['type' => 'error', 'message' => $msg]);
            return redirect()->back();
        }

        User::where('id', auth()->user()->id)->update([
            'name' => $request->name,
            'birthday' => $request->birthday,
        ]);

        $request->session()->flash('alert', ['type' => 'success', 'message' => 'Information updated successfully']);

        return redirect()->back();
    }

    public function changePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required',
        ]);

        if ($validator->fails()) {
            $msg = '';
            foreach ($validator->errors()->getMessages() as $key => $errors) {
                $msg .= '<b>' . $key . ':</b><br>';
                $msg .= join('<br>', $errors);
                $msg .= '<br>';
            }

            $request->session()->flash('alert', ['type' => 'error', 'message' => $msg]);
            return redirect()->back();
        }
        // dd(Hash::check($request->old_password, auth()->user()->password));
        if (Hash::check($request->old_password, auth()->user()->password)) {
            if ($request->new_password == $request->confirm_password) {
                auth()
                    ->user()
                    ->update([
                        'password' => Hash::make($request->new_password),
                    ]);
            } else {
                $request->session()->flash('alert', ['type' => 'error', 'message' => 'New and confirm password are not the same']);
                return redirect()->back();
            }
        } else {
            $request->session()->flash('alert', ['type' => 'error', 'message' => 'Old password incorrect']);
            return redirect()->back();
        }

        $request->session()->flash('alert', ['type' => 'success', 'message' => 'Password changed successfully']);

        return redirect('/');
    }
}
