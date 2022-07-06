<?php

namespace App\Http\Controllers;

use App\Models\Tutor;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //
    public function index()
    {
        return view('login');
    }

    public function postRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:tutors',
      
            'phonenumber' => 'required',
            'mmaddress' => 'required',
            'state' => 'required',
            'password' => 'required|min:6',
        ]);
        $data = $request->all();
        $check = $this->create($data);
        $check->save();
        return redirect("login")->with('save', 'Success')->withErrors('error', 'Failed');;
    }

    public function create(array $data)
    {
        return Tutor::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phonenumber' => $data['phonenumber'],
           'mmaddress' => $data['mmaddress'],
            'state' => $data['state'],
          
       
            'password' => Hash::make($data['password'])
        ]);
    }

    public function register()
    {
        return view('register');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('mainpage')->with('save', 'Success')->withErrors('error', 'Failed');
        }

        return redirect("login")->withSuccess('You have invalid credentials');
    }
   

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
    public function tutor()
    {
        return view('tutor');

}
}