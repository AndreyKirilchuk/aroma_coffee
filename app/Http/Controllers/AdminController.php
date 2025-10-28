<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $products_popular = Product::where('category_name', 'popular')->get();
        $products_seasonal = Product::where('category_name', 'seasonal')->get();

        return view('pages.admin', compact('products_popular', 'products_seasonal'));
    }

    public function getCreate()
    {
        return view('pages.admin_product_create');
    }

    public function getUpdate(Product $product)
    {
        return view('pages.admin_product_update', compact('product'));
    }
}
