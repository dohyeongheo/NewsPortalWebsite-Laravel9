<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscriber;
use App\Mail\Websitemail;

class AdminSubscriberController extends Controller
{
    public function show_all()
    {
        $subscribers = Subscriber::where('status', 'Active')->get();
        return view('admin.subscriber_all', compact('subscribers'));
    }

    public function send_email()
    {
        return view('admin.subscriber_send_email');
    }

    public function send_email_submit(Request $request)
    {
        $request->validate([
            'subject' => 'required',
            'message' => 'required'
        ]);

        $subject = $request->subject;
        $message = $request->message;

        $subscribers = Subscriber::where('status', 'Active')->get();
        foreach ($subscribers as $row) {
            \Mail::to($row->email)->send(new Websitemail($subject, $message));
        }

        return redirect()->route('admin_subscribers_send_email')->with('success', 'Email is sent successfully to subscribers');
    }
}
