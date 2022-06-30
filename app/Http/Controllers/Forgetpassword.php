<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Forgetpassword extends Controller
{
    public function forgetpassword()
    {
        return view('loginandregister.forgetpassword');
    }
    public function fgpasswordsent(Request $request)
    {

        if (User::where('email', $request->email)->first()) {
            $uuid =  Str::uuid()->toString();
            User::where('email', $request->email)->update(['passwordreset' => $uuid]);


            $value = [
                'name' => $request->name,
                'email' => $request->email,
                'uuid' => $uuid,
            ];
            Mail::send('loginandregister.resetmail', $value, function ($message) use ($value) {

                $message->to($value['email'], 'Presto Forte')->subject('Reset Password');
            });
            return "success";
        } else {
            return 'data';
        }
    }



    public function form_edit_get($passwordreset)
    {

        $row = User::where('passwordreset', '=', $passwordreset)->first();
        if ($row) {
            return view('loginandregister.passresetform');
        } else {
            return 404;
        }
    }
    public function form_edit_post(Request $request, $passwordreset)
    {

        $rules = [
            'password' => 'required|min:6',
            'confirm' => ['same:password']

        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {

            return redirect()->back()->withInput($request->all())->withErrors($validator);


            // dd($request->all());
}
        $row = User::where('passwordreset', '=', $request->passwordreset)->first();
        $row->password = Hash::make($request->password);
        $row->passwordreset=null;
        $row->update();
        return redirect(route('home'));
    }
}
