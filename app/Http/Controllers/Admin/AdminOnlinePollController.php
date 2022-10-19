<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OnlinePoll;

class AdminOnlinePollController extends Controller
{
    public function show()
    {
        $online_poll = OnlinePoll::get();
        return view('admin.online_poll_show', compact('online_poll'));
    }

    public function create()
    {
        return view('admin.online_poll_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required'
        ]);

        $online_poll = new OnlinePoll();
        $online_poll->question = $request->question;
        $online_poll->yes_vote = 0;
        $online_poll->no_vote = 0;
        $online_poll->save();

        return redirect()->route('admin_online_poll_show')->with('success', '온라인 투표 정보가 성공적으로 저장되었습니다.');
    }

    public function edit($id)
    {
        $online_poll_single = OnlinePoll::where('id', $id)->first();

        return view('admin.online_poll_edit', compact('online_poll_single'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'question' => 'required'
        ]);

        $online_poll = OnlinePoll::where('id', $id)->first();
        $online_poll->question = $request->question;
        $online_poll->update();

        return redirect()->route('admin_online_poll_show')->with('success', '온라인 투표 정보가 성공적으로 변경되었습니다.');
    }

    public function delete($id)
    {

        $online_poll = OnlinePoll::where('id', $id)->first();
        $online_poll->delete();

        return redirect()->route('admin_online_poll_show')->with('success', '라이브 채널 정보가 성공적으로 삭제되었습니다.');
    }
}
