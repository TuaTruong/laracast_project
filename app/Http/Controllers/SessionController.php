<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function logout(){
        auth()->logout();
        return redirect("/")->with("success","Goodbye");
    }

    public function create(){
        return view("sessions.create");
    }

    public function store(){
        $attributes = request()->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        if(!auth()->attempt($attributes) ){
            throw ValidationException::withMessages([
                "email"=> "Your provided credentials could not be verified"
            ]);
        }

        session()->regenerate();
        return redirect("/")->with("success","Welcome back!");
    }

    public function destroy(){
        auth()->logout();
        return redirect("/")->with("success","Googbye!");
}
}
