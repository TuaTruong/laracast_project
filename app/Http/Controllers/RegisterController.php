<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){
        return view("register.create");
    }

    public function store(){
        $attributes = request()->validate([
            "name" => "required|max:255|unique:users,name",
            "username" => "required|min:3|max:255|unique:users,username",
            "email" => "required|email|max:255|unique:users,email",
            "password" => "required|min:2|max:255"
        ]);

        $user = User::create($attributes);

        //Log the user in
        auth()->login($user);

        return redirect("/")->with("success","Your account has been created");
    }
}
