<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Photo;

class AdminPhotoController extends Controller
{
    public function show()
    {
        $photos  = Photo::orderBy('id', 'desc')->get();
        return view('admin.photo_show', compact('photos'));
    }

    public function create()
    {
        return view('admin.photo_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'caption' => 'required',
            'photo' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);

        $now = time();
        $ext = $request->file('photo')->extension();
        $final_name = 'photo_' . $now . '.' . $ext;
        $request->file('photo')->move(public_path('uploads/photo_gallery/'), $final_name);

        $photo = new Photo();
        $photo->caption = $request->caption;
        $photo->photo = $final_name;
        $photo->save();

        return redirect()->route('admin_photo_show')->with('success', '사진이 성공적으로 업로드되었습니다.');
    }

    public function edit($id)
    {
        $photo_single = Photo::where('id', $id)->first();

        return view('admin.photo_edit', compact('photo_single'));
    }

    public function update(Request $request, $id)
    {

        $photo_data = Photo::where('id', $id)->first();

        if ($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'required|image|mimes:jpg,jpeg,png,gif'
            ]);

            unlink(public_path('uploads/photo_gallery/' . $photo_data->photo));


            $now = time();
            $ext = $request->file('photo')->extension();
            $final_name = 'photo_' . $now . '.' . $ext;
            $request->file('photo')->move(public_path('uploads/photo_gallery'), $final_name);
            $photo_data->photo = $final_name;
        }

        $photo_data->caption = $request->caption;
        $photo_data->update();

        return redirect()->route('admin_photo_show')->with('success', '사진 정보가 성공적으로 변경되었습니다.');
    }

    public function delete($id)
    {

        $photo_data = Photo::where('id', $id)->first();
        $photo_data->delete();
        unlink(public_path('uploads/photo_gallery/' . $photo_data->photo));

        return redirect()->route('admin_photo_show')->with('success', '사진 정보가 성공적으로 삭제되었습니다.');
    }


}
