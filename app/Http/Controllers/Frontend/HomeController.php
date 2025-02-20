<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Faq;
use App\Models\Product;
use App\Models\Donation;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
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

        return view('frontend.donate.search_donation_receipt', compact('donation'));
        // return view('frontend.donate.search', compact('donation'));

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
    
    public function about() {
        return view('frontend.about');
    }

    public function achivement() {
        return view('frontend.achivement');
    }

    public function certifications() {
        return view('frontend.certifications');
    }

    public function construction() {
        return view('frontend.construction');
    }

    public function contact() {
        return view('frontend.contact');
    }

    public function dontaion() {
        return view('frontend.dontaion');
    }

    public function dontaions() {
        return view('frontend.dontaions');
    }

    public function gallery() {
        return view('frontend.gallery');
    }


    public function managmentBody() {
        return view('frontend.managment-body');
    }

    public function mission() {
        return view('frontend.mission');
    }

    public function news() {
        return view('frontend.news');
    }

    public function ourProject() {
        return view('frontend.our-project');
    }

    public function ourTeam() {
        return view('frontend.our-team');
    }

    public function privacyPolicy() {
        return view('frontend.privacy-policy');
    }

    public function refundReturnPolicy() {
        return view('frontend.refund-return-policy');
    }

    public function termsConditions() {
        return view('frontend.terms-conditions');
    }

    public function zakat() {
        return view('frontend.zakat');
    }
    public function donation() {
        return view('frontend.donation');
    }

    public function sendMail(Request $request)
    {
        // Validate the form input
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'number'  => 'required|numeric|digits_between:10,15',
            'message' => 'required|string|min:10|max:1000',
        ]);

        // Get form data
        $formData = [
            'name'    => $request->name,
            'email'   => $request->email,
            'number'  => $request->number,
            'message' => $request->message,
        ];

        // Send email
        Mail::to('contacttofiroz@gmail.com')->send(new ContactMail($formData));

        // Redirect with success message
        return back()->with('success', 'Your message has been sent successfully!');
    }
}
