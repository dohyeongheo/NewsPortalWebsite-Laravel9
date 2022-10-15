<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\Admin;
use app\Models\Page;
use App\Mail\Websitemail;

class ContactController extends Controller
{
    public function index()
    {
        $page_data = Page::where('id', 1)->first();
        return view('front.contact', compact('page_data'));
    }

    public function send_email(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        if (!$validator->passes()) {
            return response()->json(['result' => false, 'error_message' => $validator->errors()->toArray()]);
        } else {
            // Send email
            $admin_data = Model::where('id', 1)->first();
            $email = $admin_data->email;

            $subject = 'Contact Form Email';
            $message = 'Visitor Message Detail:<br>';
            $message .= '<b>Visitor Name: </b>' . $request->name . '<br>';
            $message .= '<b>Visitor Email: </b>' . $request->email . '<br>';
            $message .= '<b>Visitor Message: </b>' . $request->message;

            \Mail::to($email)->send(new Websitemail($subject, $message));
            // \Mail::to('doyeong.heo@gmail.com')->send(new Websitemail($subject, $message));

            return response()->json(['result' => true, 'success_message' => '이메일이 발송되었습니다. 감사합니다.']);
        }
    }
}
