<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function create()
    {
        return view("auth.register");
    }

    public function store()
    {
        $validated = request()->validate([
            "first_name" => ["string", "required"],
            "last_name" => ["string", "required"],
            "email" => ["required", "max:200", "email"],
            "password" => ["required", "confirmed", Password::min(8)]
        ]);

        $user = User::create($validated);

        Auth::login($user);

        return redirect("/");
    }
}
