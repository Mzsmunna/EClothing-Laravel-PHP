<?php

namespace App\Http\Controllers\custom_controllers\user_controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\MessageBag;

use Illuminate\Support\Facades\Validator;

class loginController extends Controller
{
    function LoginPage()
    {
        return view('custom_views.user_views.login');
    }

    function LoggedInReq(Request $request, MessageBag $errors)
    {
        //Server Side Validation
        /*$this->validate($request, [
            'usernameEmail' => 'required',
            'password' => 'required'
        ]);
        return Redirect::to('/login')->with('message', 'login Failed');

        ---------- using validtor ------------- > check laravel.com -> basics -> validation

        $validator = Validator::make($request->all(),[

            'usernameEmail'=>'required|min:8|max:30',
            'username'=>'required|min:8|max:30|unique:users',
            OR
            'username'=>'bail|required|min:8|max:30|unique:users', //bail can be use with                                                           any pipe
            'password'=>'required',
        ]);

        $validator->validate();
        OR,
        if($validator->fails())
        {
            return redirect()->route('user.create')->with('errors', $validator->errors())
        }else{

        }
        OR,
        use php artisan make:request userRequest and set rules in rules method and set authorize true then in controller...
        use App\...\Request\userController;

        */

        $request->validate([
            'usernameEmail'=>'required|min:3|max:30',
            'password'=>'required|min:3|max:30',
        ]);

        $user= $request->input('usernameEmail');
        $password = $request->input('password');

        $verify = User::where('username', $user)->orWhere('email', $user)->take(1)->get();
        
        if($verify->isEmpty()){

            // add your error messages:
            $errors->add('userDNE', "User doesn't exist!");
            return redirect()->back()->withInput()->withErrors($errors);
            
        }else if($password==$verify[0]->password)
        {
            //login Successful
            $address=$verify[0]->address.", ".$verify[0]->area.", ".$verify[0]->city.", ".$verify[0]->country;

            $request->session()->put('user', $verify[0]->username);
            $request->session()->put('uid', $verify[0]->id);
            $request->session()->put('email', $verify[0]->email);
            $request->session()->put('phone', $verify[0]->phonenumber);
            $request->session()->put('address', $address);
            $request->session()->put('usertype', $verify[0]->accounttype);

            if($verify[0]->accounttype == "Admin")
            {
                $request->session()->put('admin', $user);
                return redirect('/admin');
            }
            else if($verify[0]->accounttype == "User")
            {
                return redirect('/');
            }

        }else{

            // add your error messages:
            $errors->add('pwdERR', "Password is Wrong!");
            return redirect()->back()->withInput()->withErrors($errors);

        }
    }
}
