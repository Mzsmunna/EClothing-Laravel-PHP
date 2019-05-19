<?php

namespace App\Http\Controllers\custom_controllers\user_controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\MessageBag;
use Carbon\Carbon;
use App\Contact;
use App\User;

class messageController extends Controller
{
    function MesssageFrom($user, Request $request, MessageBag $errors)
    {
        if(Session::has('admin'))
        {
            $allMessages = Contact::where('msg_from', $user)
                                    ->orWhere('msg_from', 'Admin')
                                    ->where('msg_to', 'Admin')
                                    ->orWhere('msg_to', $user)->get();

            return view('custom_views.admin_views.chat', compact('user', 'allMessages'));
            //return view('custom_views.admin_views.chat');
            
        }else{

            return redirect('/');
        }
        
    }

    function ContactUs(Request $request, MessageBag $errors)
    {
        $date = Carbon::now('Asia/Dhaka'); //set time according to local-time / time-zone
        $createdDate = $date->toFormattedDateString();
        $createdTime = $date->toTimeString();

        $contact = new Contact;
        //$contact->msg_from = $user[0]->username;
        $contact->msg_to = "Admin";
        $contact->full_name = $request->input('fullname');
        $contact->phone_number = $request->input('pnumber');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');
        $contact->send_date = $createdDate;
        $contact->send_time = $createdTime;

        $user = User::where('email', $request->input('email'))->take(1)->get();

        if($user->isEmpty())
        {
            $contact->msg_from = $request->input('fullname')." ( ".$request->input('email')." ) ";
            $contact->save();
        }else if($user[0]->accounttype!="Admin"){

            if(Session::has('user'))
            {
                $contact->msg_from = $request->session()->get('user');
            }else{
                $contact->msg_from = $user[0]->username;
            }

            $contact->save();
        }

        return redirect()->back()->with('message', 'Your message has been send');
    }

    function SendMessage(Request $request)
    {
        $date = Carbon::now('Asia/Dhaka'); //set time according to local-time / time-zone
        $createdDate = $date->toFormattedDateString();
        $createdTime = $date->toTimeString();

        $msgTo = $request->input('sendto');

        if($request->has('message'))
        {
            $contact = new Contact;

            if(Session::get('usertype')=='Admin')
            {
                $contact->msg_from = 'Admin';
                $msgFrom = 'Admin';

            }else if(Session::get('usertype')=='User')
            {
                $contact->msg_from = $request->session()->get('user');
                $msgFrom = $request->session()->get('user');
            }
            
            $contact->msg_to = $request->input('sendto');
            $contact->full_name = $request->session()->get('user');
            $contact->phone_number = $request->session()->get('phone');
            $contact->email = $request->session()->get('email');
            $contact->message = $request->input('message');
            $contact->send_date = $createdDate;
            $contact->send_time = $createdTime;
            $contact->save();

        }

        if(Session::get('usertype')=="Admin")
        {
            $msgFrom = 'Admin';
            
            $allMessages = Contact::where('msg_from', $msgTo)
                                    ->orWhere('msg_from', 'Admin')
                                    ->where('msg_to', 'Admin')
                                    ->orWhere('msg_to', $msgTo)->get();

            $view = view("custom_views.rendered_views.chatbox-admin",compact('allMessages'))->render();

        }else if(Session::get('usertype')=="User")
        {
            $msgFrom = $request->session()->get('user');

            $allMessages = Contact::where('msg_from', $msgFrom)
                                    ->orWhere('msg_from', $msgTo)
                                    ->where('msg_to', $msgTo)
                                    ->orWhere('msg_to', $msgFrom)->get();

            $view = view("custom_views.rendered_views.chatbox-user",compact('allMessages'))->render();
        }

        return response()->json(['success'=>true, 'view'=>$view]);

    }
}
