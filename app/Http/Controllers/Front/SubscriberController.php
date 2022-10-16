<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscriber;
use App\Mail\Websitemail;

class SubscriberController extends Controller
{
    public function index(Request $request)
    {

        // 사용자 입력값 검증
        $validator = \Validator::make($request->all(), [
            'email' => 'required|email'
        ]);

        // 입력값 검증 실패 시 에러 메시지 전송
        if (!$validator->passes()) {
            return response()->json(['code' => 0, 'error_message' => $validator->errors()->toArray()]);
        } else {

            // 입력값 검증 성공 시, 이메일 전송

            // token 컬럼 token 값 생성
            $token = hash('sha256', time());

            // 새로운 subscriber 객체 생성
            $subscriber = new Subscriber();

            // 전송받은 이메일 값
            $subscriber->email = $request->email;

            // 토큰 값
            $subscriber->token = $token;

            // status 값
            $subscriber->status = 'Pending';

            // DB에 데이터 저장
            $subscriber->save();


            // 이메일 제목
            $subject = 'Subscriber Email Verify';

            // 이메일 확인 링크
            $verification_link = url('subscriber/verify/' . $token . '/' . $request->email);

            // 이메일 메시지
            $message = 'Please Click on the following link in order to verify your email <br>';

            $message .= '<a href=".$verification_link.">';
            $message .= $verification_link;
            $message .= '</a>';

            \Mail::to($request->email)->send(new Websitemail($subject, $message));

            return response()->json(['code' => 1, 'success_message' => 'Please Check your Email Address to verify your email']);

            // 이메일 발송 후 자바스크립트 토스트 메시지 작동 안함
            // -> app.blade.php에 스크립트 코드 추가 후 작동
        }
    }

    public function verify($token, $email)
    {
        $subscriber_data = Subscriber::where('token', $token)->where('email', $email)->first();

        if ($subscriber_data) {
            $subscriber_data->token = '';
            $subscriber_data->status = 'Active';
            $subscriber_data->update();

            return redirect()->back()->with('success', 'You are Successfully Verified as a Subscriber to this system');
        } else {
            return redirect()->route('home');
        }
    }
}
