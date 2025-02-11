<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Faq;
use App\Models\Product;
use App\Models\Donation;

class HomeController extends Controller
{
    // Handle search logic
    public function searchDonation(Request $request)
    {
        $request->validate([
            'donation_id' => 'required|string', // Validate input
        ]);

        // Attempt to find the donation by donation_id
        $donation = Donation::where('donation_id', $request->donation_id)->first();

        return view('frontend.donate.search', compact('donation'));

    }
    public function index()
    {
        // Fetch all news from the database
        $news = News::all();
        $faqs = Faq::all();
        $products = Product::all();

        // Pass the news data to the Blade view
        return view('frontend.index', compact('news','faqs', 'products'));
    }
    public function about()
    {
        

        // Pass the news data to the Blade view
        return view('frontend.about', compact());
    }
}
