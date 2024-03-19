<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function loginPost(Request $request): RedirectResponse
    {
        $credentials = [
            'name' => $request->name,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return response()->redirectToRoute('identidade.index');
        }

        return response()->redirectToRoute('login')->with('error', 'Email or Password wrong');
    }

    public function logoutPost()
    {
        Auth::logout();
        session()->invalidate();
        return response()->redirectToRoute('login');
    }
}
