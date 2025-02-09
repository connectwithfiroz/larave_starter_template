<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
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
        Auth::guard('admin')->logout();
        return redirect()->route('admin-login')->with('message', 'Successfully Logged Out Please Login');
    }

    public function dashboard()
    {
        // Fetch total donations
        $totalDonations = DB::table('donations')->where('status', 'Success')->count();
    
        // Fetch total donation amount (sum of successful donations)
        $totalDonationAmount = DB::table('donations')
            ->where('status', 'success') // Assuming 'success' indicates successful donations
            ->sum('amount');
    
        // Fetch total unique users (by name or email)
        $totalUsers = DB::table('donations')
            ->distinct()
            ->count('email'); // Change to 'name' or another field if needed
        
        // Query to get total donations and total amount grouped by donation_for
        $donationData = DB::select("
            SELECT donation_for, COUNT(*) AS total_donations, SUM(amount) AS total_amount
            FROM donations  where status='Success'
            GROUP BY donation_for
        ");
    
        // Pass data to the view
        return view('admin.dashboard', compact('totalDonations', 'totalDonationAmount', 'totalUsers', 'donationData'));
    }
    
}
