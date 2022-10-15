<?php

namespace App\Http\Controllers\Admin;

use App\Mail\Websitemail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Tag;
use Auth;
use DB;



class AdminPostController extends Controller
{
    public function show()
    {
        $posts  = Post::with('rSubcategory.rCategory')->get();

        return view('admin.post_show', compact('posts'));
    }

    public function create()
    {
        $sub_categories = SubCategory::with('rCategory')->get();

        return view('admin.post_create', compact('sub_categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'post_title' => 'required',
            'post_detail' => 'required',
            'post_photo' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);

        $q = DB::select("Show Table Status Like 'posts'");
        $ai_id = $q[0]->Auto_increment;

        $now = time();
        $ext = $request->file('post_photo')->extension();
        $final_name = 'post_photo_' . $now . '.' . $ext;
        $request->file('post_photo')->move(public_path('uploads/'), $final_name);

        $post = new Post();
        $post->sub_category_id =
            $request->sub_category_id;
        $post->post_title = $request->post_title;
        $post->post_detail = $request->post_detail;
        $post->post_photo = $final_name;
        $post->visitors = 1;
        $post->author_id = 0;
        $post->admin_id = Auth::guard('admin')->user()->id;
        $post->is_share = $request->is_share;
        $post->is_comment = $request->is_comment;
        $post->save();

        if ($request->tags != '') {

            $tags_array_new = [];
            $tags_array = explode(',', $request->tags);
            for ($i = 0; $i < count($tags_array); $i++) {
                $tags_array_new[] = trim($tags_array[$i]);
            }
            $tags_array = array_values(array_unique($tags_array_new));



            for ($i = 0; $i < count($tags_array); $i++) {
                $tag = new Tag();
                $tag->post_id = $ai_id;
                $tag->tag_name = $tags_array[$i];
                $tag->save();
            }
        }

        // Sendind this post to subscribers
        if ($request->subscriber_send_option == 1) {

        }


        return redirect()->route('admin_post_show')->with('success', '포스트가 성공적으로 생성되었습니다.');
    }

    public function edit($id)
    {
        $sub_categories = SubCategory::with('rCategory')->get();
        $existing_tags = Tag::where('post_id', $id)->get();
        $post_single = Post::where('id', $id)->first();

        return view('admin.post_edit', compact('post_single', 'sub_categories', 'existing_tags'));
    }

    public function delete_tag($post_id, $tag_id)
    {
        $tag = Tag::where('id', $tag_id)->first();
        $tag->delete();
        return redirect()->route('admin_post_edit', $post_id)->with('success', '태그가 성공적으로 삭제되었습니다.');
    }

    public function update(Request $request, $id)
    {

        $post_data = Post::where('id', $id)->first();

        if ($request->hasFile('post_photo')) {
            $request->validate([
                'post_photo' => 'required|image|mimes:jpg,jpeg,png,gif'
            ]);

            unlink(public_path('uploads/' . $post_data->post_photo));

            $now = time();
            $ext = $request->file('post_photo')->extension();
            $final_name = 'post_photo_' . $now . '.' . $ext;
            $request->file('post_photo')->move(public_path('uploads/'), $final_name);
            $post_data->post_photo = $final_name;
        }

        $request->validate([
            'post_title' => 'required',
            'post_detail' => 'required',
        ]);

        $post_data->sub_category_id =
            $request->sub_category_id;
        $post_data->post_title = $request->post_title;
        $post_data->post_detail = $request->post_detail;

        $post_data->is_share = $request->is_share;
        $post_data->is_comment = $request->is_comment;
        $post_data->update();

        if ($request->tags != '') {

            $tags_array = explode(',', $request->tags);
            for ($i = 0; $i < count($tags_array); $i++) {

                $total = Tag::where('post_id', $id)->where('tag_name', trim($tags_array[$i]))->count();

                if (!$total) {
                    $tag = new Tag();
                    $tag->post_id = $id;
                    $tag->tag_name = trim($tags_array[$i]);
                    $tag->save();
                }
            }
        }

        return redirect()->route('admin_post_show')->with('success', '포스트 정보가 성공적으로 변경되었습니다.');
    }

    public function delete($id)
    {

        $post_data = Post::where('id', $id)->first();
        $post_data->delete();
        unlink(public_path('uploads/' . $post_data->post_photo));

        $tag_data = Tag::where('post_id', $id)->first();
        $tag_data->delete();

        return redirect()->route('admin_post_show')->with('success', '포스트 정보가 성공적으로 삭제되었습니다.');
    }
}
