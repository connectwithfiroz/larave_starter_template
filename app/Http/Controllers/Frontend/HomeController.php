<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Faq;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch all news from the database
        $news = News::all();
        $faqs = Faq::all();

        // Pass the news data to the Blade view
        return view('frontend.index', compact('news','faqs'));
    }
}
