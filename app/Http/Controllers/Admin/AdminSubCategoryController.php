<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;


class AdminSubCategoryController extends Controller
{
    public function show()
    {
        $sub_categories  = SubCategory::with('rCategory')->orderBy('sub_category_order', 'asc')->get();
        return view('admin.sub_category_show', compact('sub_categories'));
    }

    public function create()
    {
        $categories = Category::orderBy('category_order', 'asc')->get();
        return view('admin.sub_category_create', compact('categories'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'sub_category_name' => 'required',
            'sub_category_order' => 'required',
        ]);

        $sub_category = new SubCategory();
        $sub_category->sub_category_name = $request->sub_category_name;
        $sub_category->show_on_menu = $request->show_on_menu;
        $sub_category->show_on_home = $request->show_on_home;
        $sub_category->sub_category_order = $request->sub_category_order;
        $sub_category->category_id = $request->category_id;
        $sub_category->save();

        return redirect()->route('admin_sub_category_show')->with('success', '서브 카테고리가 성공적으로 생성되었습니다.');
    }

    public function edit($id)
    {
        $sub_category_single = SubCategory::where('id', $id)->first();
        $category_data = Category::OrderBy('id', 'asc')->get();

        return view('admin.sub_category_edit', compact('sub_category_single', 'category_data'));
    }

    public function update(Request $request, $id)
    {
        $sub_category_data = SubCategory::where('id', $id)->first();

        $request->validate([
            'sub_category_name' => 'required',
            'sub_category_order' => 'required',
        ]);

        $sub_category_data->sub_category_name = $request->sub_category_name;
        $sub_category_data->show_on_menu = $request->show_on_menu;
        $sub_category_data->show_on_home = $request->show_on_home;

        $sub_category_data->sub_category_order = $request->sub_category_order;
        $sub_category_data->category_id = $request->category_id;

        $sub_category_data->update();

        return redirect()->route('admin_sub_category_show')->with('success', '서브 카테고리 정보가 성공적으로 변경되었습니다.');
    }

    public function delete($id)
    {
        $sub_category_data = SubCategory::where('id', $id)->first();
        $sub_category_data->delete();
        return redirect()->route('admin_sub_category_show')->with('success', '서브 카테고리 정보가 성공적으로 삭제되었습니다.');
    }
}
