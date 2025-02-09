<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Faq;
use App\Models\Product;

class HomeController extends Controller
{
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
