<?php

namespace App\Http\Controllers\custom_controllers\user_controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class logoutController extends Controller
{
    function LogOut(Request $request)
    {
        //$request->session()->forget('user'); // Destroy on the particular key
        $request->session()->flush(); // Destroy everything in session
        return redirect('/login');
    }
}
