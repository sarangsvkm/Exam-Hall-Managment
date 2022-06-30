<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use PDF;



class LoginController extends Controller

{

    public function home()
    {
        return view('dashboard.home');
    }
    public function register()
    {
       if(Auth::user()){
           return redirect(route('dashboard.dashboard'));
       }
       else
           return view('loginandregister.register');
    }
    public function registrationsubmit(Request $request)
    {

        $rules = [
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'confirm' => ['same:password']

        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {

            return redirect()->back()->withInput($request->all())->withErrors($validator);


            // dd($request->all());
}


        $verify =Str::uuid()->toString();
        $data = [

            'email' => $request->email,
            'name' =>$request->name,
            'title' => "Registration",
            'body' =>"Completed",


        ];
        Mail::send('loginandregister.registrationverification', $data, function($message)use($data) {
            $message->to($data["email"], $data["email"])
                    ->subject($data["title"]);

        });

        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->role=$request->role;
        $user->password=Hash::make($request->password);


        $user->save();

        return redirect(route('login'));

    }

    public function login()
    {
        Redirect::setIntendedUrl(url()->previous());
        if(Auth::user()){
            return redirect(route('dashboard.dashboard'));
        }
        else{
            return view('loginandregister.loginmain');
        }

    }
    public function loginsubmit(Request $request){

        $credentials = $request->only('email','password');
        if (Auth::attempt($credentials)){

            // if (Auth::user()->role == "Admin")
            // {
                return redirect(route('dashboard.dashboard'));
            // }
            // return redirect()->intended(RouteServiceProvider::HOME);
        }
        abort(404);
    }


    public function stud_login()
    {

        return view('loginandregister.student_login');


    }



}
