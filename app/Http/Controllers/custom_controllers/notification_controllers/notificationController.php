<?php

namespace App\Http\Controllers\custom_controllers\notification_controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\MessageBag;
use Carbon\Carbon;
use App\Notification;

class notificationController extends Controller
{
    public function Store(Request $request, MessageBag $errors)
    {
        if(Session::has('admin'))
        {
            return "i'm in notification/admin";
        }
        
        else if(Session::has('user'))
        {
            if($request->input('notify_type')=="Report")
            {
                if($request->input('notify_of')=="Comment")
                {
                    $date = Carbon::now('Asia/Dhaka');
                    $notify_date = $date->toFormattedDateString();
                    $notify_time = $date->toTimeString();

                    $notification = new Notification;
                    $notification->notify_for = $request->input('notify_for');
                    $notification->notify_forid = $request->input('notify_forid');
                    $notification->notify_of = $request->input('notify_of');
                    $notification->notify_ofid = $request->input('notify_ofid');
                    $notification->notify_type = $request->input('notify_type');
                    $notification->notify_by = $request->input('notify_by');
                    $notification->notify_title = $request->input('notify_title');
                    $notification->notify_dtls = $request->input('notify_dtls');
                    $notification->notify_to = $request->input('notify_to');
                    $notification->notify_time = $notify_time;
                    $notification->notify_date = $notify_date;
                    $notification->status = "unchecked";
                    $notification->pid = $request->input('pid');
                    $notification->cmntid = $request->input('cmntid');
                    $notification->save();

                }
            }

            return redirect()->back()->with('message', 'Your Report has been send! Thanks for your kind feedback!');

        }else{
            return redirect()->back()->with('message', 'please login to perform the task!');
        }
    }
}
