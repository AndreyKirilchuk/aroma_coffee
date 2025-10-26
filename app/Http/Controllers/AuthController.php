<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        $validator = validator(request()->all(), [
            "email" => "required",
            "password" => "required"
        ]);

        if($validator->fails()) return back()->withInput()->withErrors($validator->errors());

        if(!auth()->attempt($validator->validated())) return back()->withErrors(["error" => "Не верный логин или пароль"]);

        $user = auth()->user();

        if($user->role === 'admin') return redirect('/admin');
        return redirect('/profile');
    }

    public function register()
    {
        $validator = validator(request()->all(), [
            "firstname" => "required|string|max:255",
            "lastname" => "required|string|max:255",
            "email" => "required|email|max:255",
            "password" => "required|string|between:2,255",
        ]);

        if($validator->fails()) return back()->withInput()->withErrors($validator->errors());

        User::create($validator->validated());

        return redirect('/login');
    }

    public function logout()
    {
        auth()->logout();

        return redirect('/');
    }

    public function getProfile()
    {
        $user = auth()->user();

        $orders = $user->orders;

        return view('pages.profile', compact('user', 'orders'));
    }
}
