<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ReviewController extends Controller
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
            "grade" => "required|integer|between:1,5",
            "img" => "required|image|mimes:jpeg,png,jpg|max:4096",
            "text" => "required|string|between:25,50000",
        ]);

        if ($validator->fails()) return back()->withErrors($validator)->withInput();

        $data = $validator->validated();

        $img = $data['img'];

        $path = Str::uuid() . '.' . $img->getClientOriginalExtension();
        $img->move(public_path('products'), $path);
        $data['img'] = '/products/' . $path;

        $data['user_id'] = auth()->id();

        Review::create($data);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        if ($review->user_id !== auth()->id()) return back();

        if (file_exists(public_path($review->img))) unlink(public_path($review->img));

        $review->delete();

        return back();
    }

    public function getAdd()
    {
        return view('pages.add_reviews');
    }
}
