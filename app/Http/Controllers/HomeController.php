<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\comments;
use App\Models\Message;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Throwable;

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

    public function single()
    {
        return view('home.single');
    }
    public function blog()
    {
        return view('home.blog');
    }
    public function contact()
    {
        return view('home.contact');
    }




    public function appointment()
    {
        return view('home.appointment');
    }
    public function storeappointment(Request $request)
    {

        try {

            //dd($request);
            $data = new appointment();
            $data->Law = $request->input('Law');
            $data->Phone = $request->input('Phone');
            $data->Time = $request->input('Time');
            $data->Subject = $request->input('Subject');
            $data->save();
        }
        catch (Throwable $e) {

                return redirect()->route('appointment')->with('warning','Randevu talebiniz alınamadı , tarihi dolu');
            }
        return redirect()->route('appointment')->with('info','Randevu talebiniz alınmıştır , teşekkürler');
    }

    public function storemessage(Request $request)
    {
        //dd($request);
        $data = new comments();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip=request()->ip();
        $data->save();

        return redirect()->route('contact')->with('info','mesajınız yollandı , teşekkürler');
    }

   // public function login()
   // {
    //    return view('layouts.login');
    //}
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
            return view('layouts.admin');
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
