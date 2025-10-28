<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $reviews = Review::all();

        return view('pages.index', compact('products', 'reviews'));
    }

    public function login()
    {
        $user = auth()->user();

        if($user) return redirect('/');

        return view('pages.login');
    }

    public function register()
    {
        $user = auth()->user();

        if($user) return redirect('/');

        return view('pages.register');
    }
}
