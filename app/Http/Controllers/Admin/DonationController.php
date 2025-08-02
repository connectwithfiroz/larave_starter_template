<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Donation;


class DonationController extends Controller
{
    public function index(Request $request)
    {
        // Paginate the donations (10 per page)
        $donations = Donation::latest('created_at')->get();

        // Pass donations to the view
        return view('admin.donations.index', compact('donations'));
    }
}
