<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use App\Models\Order;
class AdminHomeController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function login_post(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::guard('admin')->attempt($credentials)) {

            $request->session()->regenerate();
            //    dd('sad');
            return redirect()->route('admin.dashboard')->with('success', 'Login Successful');
        } else {
            return back()->with('error', 'Invalid Credentials');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('message', 'Successfully Logged Out Please Login');
    }

    public function dashboard()
    {
        $orders = [];
        return view('admin.dashboard', compact('orders'));
    }
}
