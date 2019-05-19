<?php

namespace App\Http\Controllers\custom_controllers\user_controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Purchase;
use App\Product;
use App\Favourite;
use App\Rating;
use App\Notification;
use App\Contact;

class indexController extends Controller
{
    function IndexPage()
    {
        $allProducts = Product::orderBy('pid', 'DESC')->get();
        //$favourites = Favourite::where('uid', Session::get('uid'))->get();
        $favourites = Favourite::where('username', Session::get('user'))->get();
        $ratings = Rating::where('username', Session::get('user'))->get();

        return view('custom_views.user_views.index', compact('allProducts', 'favourites', 'ratings'));
        //return view('custom_views.user_views.index');
    }

    function AboutPage()
    {
        return view('custom_views.user_views.about');
    }

    function ServicePage()
    {
        return view('custom_views.user_views.services');
    }

    function ContactPage()
    {
        return view('custom_views.user_views.contact');
    }

    function UserProfile($uname, Request $request, MessageBag $errors)
    {
        //$user = User::find(Session::get('uid'));
        if((Session::has('user')))
        {
            if(Session::get('usertype')=='Admin')
            {
                $user = User::where('username', $uname)->take(1)->get();
                $username = $uname;
            }else {
                $user = User::where('id', (Session::get('uid')))->take(1)->get();
                $username = $request->session()->get('user');
            }

            if($user->isEmpty())
            {
                $errors->add('oops', "User doesn't exist or hasn't been Registered yet");
                return redirect()->back()->withErrors($errors);
                //return redirect()->back();
            }
            else{
                $allPurchases = Product::join('purchases', 'products.pid', '=', 'purchases.pid')
                ->where('purchases.purchasedby', $username)
                ->select('products.*', 'purchases.date', 'purchases.quantity', 'purchases.purchasedmethod', 'purchases.phonenumber', 'purchases.address', 'purchases.price', 'purchases.totalprice', 'purchases.size')
                ->orderBy('purchases.date', 'DESC')
                ->getQuery()
                ->get();

                $allFavourites = Product::join('favorites', 'products.pid', '=', 'favorites.pid')
                ->where('favorites.username', $username)
                ->select('products.*', 'favorites.fid')
                ->orderBy('favorites.fid', 'DESC')
                ->getQuery()
                ->get();

                $favourites = Favourite::where('username', $username)->orderBy('fid', 'DESC')->get();
                $ratings = Rating::where('username', $username)->get();
                $activities = Notification::where('notify_to', $username)->orderBy('nid', 'DESC')->get();

                $allMessages = Contact::where('msg_from', $username)
                                        ->orWhere('msg_from', 'Admin')
                                        ->where('msg_to', 'Admin')
                                        ->orWhere('msg_to', $username)->get();

                $myProducts = Purchase::where('purchasedby', $username)->distinct()->get(['pid', 'pname']);

                $myItems = Purchase::select('pid', DB::raw("SUM(quantity) as allQuantities"), DB::raw("SUM(totalprice) as totalprice"), DB::raw("SUM(totalcost) as totalcost"), 'pname', 'pfor', 'category')
                    ->orderBy("allQuantities", 'DESC')
                    ->groupBy('pid', 'pname', 'pfor', 'category')
                    ->where('purchasedby', $username)
                    ->get();

                //return $myItems;
                return view('custom_views.user_views.user-profile', compact('user', 'allPurchases', 'myProducts', 'myItems', 'allFavourites', 'favourites', 'ratings', 'activities', 'allMessages'));
            }

        }else{
            return redirect('/');
        }
    }

    function UpdateInfo($id, Request $request, MessageBag $errors)
    {
        $verifyUser = User::where('username', $request->input('username'))->take(1)->get();
        $verifyEmail = User::where('email', $request->input('email'))->take(1)->get();
        $verify = true;

        $user = User::find($id);
        if(($verifyUser->isEmpty())||($verifyUser[0]->username==$request->session()->get('user')))
        {
            $user->username = $request->input('username');

        }else{
            $verify = false;
        }
        
        if(($verifyEmail->isEmpty())||($verifyEmail[0]->email==$request->session()->get('email')))
        {
            $user->email = $request->input('email');

        }else{
            $verify = false;
        }

        if($verify)
        {
            $user->firstname = $request->input('firstname');
            $user->lastname = $request->input('lastname');
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

            return redirect('/user-profile/'.$user->username)->with('message', 'Info Updated Successfully!');

        }else{

            if(!($verifyUser[0]->username==$request->session()->get('user'))){

                $errors->add('userEXT', "Username '".$request->input('username'). "' is already taken by someone else!");

                $errors->add('updateErr', "Username '".$request->input('username'). "' is already taken by someone else!");
            }

            if(!($verifyEmail[0]->email==$request->session()->get('email'))){

                $errors->add('emailEXT', "'".$request->input('email'). "' is already registered by someone else!");

                $errors->add('updateErr', "'".$request->input('email'). "' is already registered by someone else!");
    
            }

            return redirect()->back()->withInput()->withErrors($errors);
        }

    }

    function ChangePic(Request $request, MessageBag $errors)
    {
        if ($request->hasFile('profilepic')) {

            $request->validate([
                'profilepic' => 'max:5120',
            ]);

            $image = $request->file('profilepic');
            //$name = $user->username .'.'.$image->getClientOriginalExtension();
            $name = $request->session()->get('user') .'.jpg';
            $destinationPath = public_path('/custom_public/uploads/users/'.$request->session()->get('user').'/profilepic');
            $image->move($destinationPath, $name);
            //$user->profilepic = $name;

            return redirect('/user-profile/'.$request->session()->get('user'))->with('message', 'Profile Pic has been Changed!');

        }else{

            $errors->add('uploadErr', "Please select a valid image file");
            return redirect()->back()->withErrors($errors);
        }
    }
    
}
