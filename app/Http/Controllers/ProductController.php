<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = validator($request->all(), [
            "name" => "required|string|max:255",
            "price" => "nullable|numeric|between:0,9999999999.99",
            "img" => "required|image|mimes:jpeg,png,jpg|max:4096",
            "description" => "required|string|between:25,50000",
            "category_name" => "required|string|max:255|in:popular,seasonal"
        ]);

        if($validator->fails()) return back()->withErrors($validator)->withInput();

        $data = $validator->validated();

        $img = $data['img'];

        $path = Str::uuid() . '.' . $img->getClientOriginalExtension();
        $img->move(public_path('products'), $path);
        $data['img'] = '/products/' . $path;

        Product::create($data);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validator = validator($request->all(), [
            "name" => "nullable|string|max:255",
            "price" => "nullable|numeric|between:0,9999999999.99",
            "img" => "nullable|image|mimes:jpeg,png,jpg|max:4096",
            "description" => "nullable|string|between:25,50000",
            "category_name" => "nullable|string|max:255|in:popular,seasonal"
        ]);

        if($validator->fails()) return back()->withErrors($validator)->withInput();

        $data = $validator->validated();

        if(isset($data['img']))
        {
            $img = $data['img'];

            if(file_exists(public_path($product->img))) unlink(public_path($product->img));

            $path = Str::uuid() . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('products'), $path);
            $data['img'] = '/products/' . $path;
        }

        $product->update($data);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if(file_exists(public_path($product->img))) unlink(public_path($product->img));

        $product->delete();

        return back();
    }
}
