<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;

class AdminVideoController extends Controller
{
    public function show()
    {
        $videos  = Video::orderBy('id', 'desc')->get();
        return view('admin.video_show', compact('videos'));
    }

    public function create()
    {
        return view('admin.video_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'caption' => 'required',
            'video_id' => 'required'
        ]);

        $video = new Video();
        $video->video_id = $request->video_id;
        $video->caption = $request->caption;
        $video->save();

        return redirect()->route('admin_video_show')->with('success', '동영상 정보가 성공적으로 업로드되었습니다.');
    }

    public function edit($id)
    {
        $video_single = Video::where('id', $id)->first();

        return view('admin.video_edit', compact('video_single'));
    }

    public function update(Request $request, $id)
    {

        $video_data = Video::where('id', $id)->first();

        $video_data->caption = $request->caption;
        $video_data->update();

        return redirect()->route('admin_video_show')->with('success', '동영상 정보가 성공적으로 변경되었습니다.');
    }

    public function delete($id)
    {

        $video_data = Video::where('id', $id)->first();
        $video_data->delete();

        return redirect()->route('admin_video_show')->with('success', '동영상 정보가 성공적으로 삭제되었습니다.');
    }
}
