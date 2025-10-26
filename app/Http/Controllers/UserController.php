<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
        $user = auth()->user();

        return view('pages.profile', compact('user'));
    }

    public function update(Request $request)
    {
        $validator = validator($request->all(), [
           "firstname" => "required|string|max:255",
           "lastname" => "required|string|max:255",
           "birthday" => "nullable|date|date_format:Y-m-d",
        ]);

        if($validator->fails()) return back()->withInput()->withErrors($validator->errors());

        auth()->user()->update($validator->validated());

        return back();
    }
}
