<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function index()
    {
        // Pass the news data to the Blade view
        return view('welcome');
    }
}
