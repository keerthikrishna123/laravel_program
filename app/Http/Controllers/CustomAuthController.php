<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use App\Models\user_book;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class CustomAuthController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }  
      
    public function vendorlogin()
    {
        return view('auth.login');
    }  
      
    public function adminlogin()
    {
        return view('auth.login');
    }  

    public function userlogin()
    {
        echo "ngnhg";
       // return view('auth.login');
    } 
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',

        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {

            if(Auth::user()->role_as == '0')
            {
                return redirect()->intended('admin-index')
                ->withSuccess('Signed in');
            }

            if(Auth::user()->role_as == '1' && Auth::user()->st == '0')
            {
            return redirect()->intended('index')
            ->withSuccess('Signed in'); 
           }
           if(Auth::user()->role_as == '1' && Auth::user()->st == '2')
           {
            return redirect()->back()->with('Failed',' You have no permission to login');
          }
        }
        else{

        
  
            return redirect()->back()->with('Failed',' Invalid email or password');
    }
    }



    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role_as'=>'1'
        ]);
           
       
$st=new User;

  $st->name=$request->name;
  $st->email=$request->email;
  $st->password= Hash::make($request->password);
  $st->role_as=1;
  $st->st=0;
  $st->save();
  return view("auth.login");
    }


    

    public function dashboard()
    {
        if(Auth::check()){
            return view('user/profile');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    

    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}