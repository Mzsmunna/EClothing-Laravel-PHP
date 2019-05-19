<?php

namespace App\Http\Controllers\custom_controllers\user_controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Session;

class registerController extends Controller
{
    function RegisterPage()
    {
        return view('custom_views.user_views.register');
    }

    function RegisterUser(Request $request, MessageBag $errors)
    {
        $verifyUser = User::where('username', $request->input('username'))->take(1)->get();
        $verifyEmail = User::where('email', $request->input('email'))->take(1)->get();

        $request->validate([
            'username'=>'required|min:3|max:30',
            'firstname'=>'required|min:3|max:30',
            'lastname'=>'required|min:3|max:30',
            'email'=>'required|email|max:50',
            'password'=>'required|min:3|max:30',
            'DOB'=>'nullable|date|before:today',

        ]);

        if(($verifyUser->isEmpty())&&($verifyEmail->isEmpty()))
        {
            $user = new User;
            $user->username = $request->input('username');
            $user->firstname = $request->input('firstname');
            $user->lastname = $request->input('lastname');
            $user->email = $request->input('email');
            $user->password = $request->input('password');
            $user->gender = $request->input('gender');
            $user->dob = $request->input('DOB');
            $user->phonenumber = $request->input('pnumber');
            $user->country = $request->input('country');
            $user->city = $request->input('city');
            $user->area = $request->input('area');
            $user->address = $request->input('address');
            $user->accounttype = $request->input('acctype');

            if ($request->hasFile('profilepic')) {

                $request->validate([
                    'profilepic' => 'max:5120',
                ]);

                $image = $request->file('profilepic');
                //$name = $user->username .'.'.$image->getClientOriginalExtension();
                $name = $user->username .'.jpg';
                $destinationPath = public_path('/custom_public/uploads/users/'.$user->username.'/profilepic');
                $image->move($destinationPath, $name);
                $user->profilepic = $name;
            }
            $user->save();

            if(Session::has('admin'))
            {
                return redirect('/admin/usertable')->with('message', 'User Successfully Added!');;

            }else{

                return redirect('/login')->with('message', 'Registration Successful!');
            }

        }else{

            if(count($verifyUser)>=1){

                $errors->add('userEXT', "Username already taken!");
            }

            if(count($verifyEmail)>=1){

                $errors->add('emailEXT', "This Email already registered!");
            }

            return redirect()->back()->withInput()->withErrors($errors);

        }
    }
}
