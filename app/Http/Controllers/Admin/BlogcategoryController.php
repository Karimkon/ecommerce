<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogcategoryModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogcategoryController extends Controller
{
    public function list()
    {
        $data['getRecord'] = BlogcategoryModel::getRecord();
        $data['header_title'] = "Blog Category List";
        return view('admin.blogcategory.list', $data);
    }
    public function add()
    {
        $data['header_title'] = "Add New Blog Category";
        return view('admin.blogcategory.add', $data);
    }

    public function insert(Request $request)
    {
        request()->validate([
            'slug' => 'required|unique:category'
        ]);
        $category = new BlogcategoryModel;
        $category->name = trim($request->name);
        $category->slug = trim($request->slug);
        $category->status = trim($request->status);
        $category->meta_title = trim($request->meta_title);
        $category->meta_description = trim($request->meta_description);
        $category->meta_keywords = trim($request->meta_keywords);

        $category->save();

        return redirect('admin/blogcategory/list')->with('success', "Blog Category Succesfully created.");
    }

    public function edit($id)
    {
        $data['getRecord'] = BlogcategoryModel::getSingle($id);
        if(!empty($data['getRecord']))
        {
            $data['header_title'] = "Edit Selected Admin";
            return view('admin.blogcategory.edit', $data);
        }
        else
        {
            abort(404);
        }

    }

    public function update($id, Request $request)
    {
        request()->validate([
            'slug' => 'required|unique:category,slug,'.$id
        ]);
        $category = BlogcategoryModel::getSingle($id);
        $category->name = trim($request->name);
        $category->slug = trim($request->slug);
        $category->status = trim($request->status);
        $category->meta_title = trim($request->meta_title);
        $category->meta_description = trim($request->meta_description);
        $category->meta_keywords = trim($request->meta_keywords);

        $category->save();

        return redirect('admin/blogcategory/list')->with('success', "Blog Category Succesfully Updated.");
    }

    public function delete($id)
    {
        $user = BlogcategoryModel::getSingle($id);
        $user->is_delete = 1;
        $user->save();

        return redirect('admin/blogcategory/list')->with('success', "Category Succesfully deleted.");
    }
}
