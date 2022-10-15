<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\SubCategory;
use App\Models\Admin;
use App\Models\Tag;



class PostController extends Controller
{
    public function detail($id)
    {
        $post_detail = Post::with('rSubcategory')->where('id', $id)->first();

        if ($post_detail->author_id == 0) {
            $user_data = Admin::where('id', $post_detail->admin_id)->first();
        } else {
            // Implement this later
        }

        $post_detail->visitors = $post_detail->visitors + 1;
        $post_detail->update();

        $tag_data = Tag::where('post_id', $id)->get();

        return view('front.post_detail', compact('post_detail', 'user_data', 'tag_data'));
    }
}
