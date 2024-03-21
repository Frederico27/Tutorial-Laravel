<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(): Response
    {
        return response()->view('loginForm');
    }

    public function loginPost(Request $request): RedirectResponse
    {
        $credentials = [
            'name' => $request->name,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $request->session()->regenerate();
            $user = auth()->user();
            return response()->redirectToRoute('identidade.index');
        }

        return response()->redirectToRoute('loginForm')->with('error', 'Email or Password wrong');
    }

    public function logoutPost(): RedirectResponse
    {
        Auth::logout();
        session()->invalidate();
        return response()->redirectToRoute('loginForm');
    }
}
