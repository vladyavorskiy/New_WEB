<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            //return redirect()->intended('login');
            return redirect()->intended('/country')->withErrors([
                'success' => 'Вы успешно вошли в систему',
            ]);
        }
        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ])->onlyInput('email','password');
    }

    public function login(Request $request)
    {
        return view('layout',['user'=>Auth::user()])->withErrors([
            'error' => 'Вам необходимо авторизоваться',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        //return redirect('login');
        return redirect('/country')->withErrors([
            'success' => 'Вы успешно вышли из системы',
        ]);
    }
}




