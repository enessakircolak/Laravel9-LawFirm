<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home.index');
    }

    public function about()
    {
        return view('home.about');
    }
    public function service()
    {
        return view('home.service');
    }
    public function team()
    {
        return view('home.team');
    }
    public function portfolio()
    {
        return view('home.portfolio');
    }
    public function contact()
    {
        return view('home.contact');
    }
    public function single()
    {
        return view('home.single');
    }
    public function blog()
    {
        return view('home.blog');
    }

    public function login()
    {
        return view('layouts.login');
    }
    public function logincheck(Request $request)
    {
        if ($request->isMethod('post'))
        {
            $credentials = $request->only('email','password');
            if (Auth::attempt($credentials)){
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'email' => 'the provided credentials do not match our records.',
            ]);
        }
        else
        {
            return view('layouts.login');
        }
    }
    public  function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    /*
    public function test($id)
     {
         return view('home.test',['id'=>$id]);
         //echo "id :", $id;
     }
    */
}
