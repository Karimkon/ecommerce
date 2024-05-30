<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function list()
    {
        $data['getRecord'] = CategoryModel::getRecord();
        $data['header_title'] = "Category List";
        return view('admin.category.list', $data);
    }
    public function add()
    {
        $data['header_title'] = "Add New Category";
        return view('admin.category.add', $data);
    }

    public function insert(Request $request)
    {
        request()->validate([
            'slug' => 'required|unique:category'
        ]);
        $category = new CategoryModel;
        $category->name = trim($request->name);
        $category->slug = trim($request->slug);
        $category->status = trim($request->status);
        $category->meta_title = trim($request->meta_title);
        $category->meta_description = trim($request->meta_description);
        $category->meta_keywords = trim($request->meta_keywords);
        $category->created_by = Auth::user()->id;

        $category->button_name = trim($request->button_name);
        $category->is_home = !empty($request->is_home) ? 1 : 0;
        $category->is_menu = !empty($request->is_menu) ? 1 : 0;

        if ($request->hasFile('image_name') && $request->file('image_name')->isValid()) {
            $file = $request->file('image_name');
            $ext = $file->getClientOriginalExtension();
            $randomStr = Str::random(20);
            $filename = strtolower($randomStr).'.'.$ext;
            $file->move('upload/category/', $filename);
            $category->image_name = trim($filename);
        }

        $category->save();

        return redirect('admin/category/list')->with('success', "Category Succesfully created.");
    }

    public function edit($id)
    {
        $data['getRecord'] = CategoryModel::getSingle($id);
        if(!empty($data['getRecord']))
        {
            $data['header_title'] = "Edit Selected Admin";
            return view('admin.category.edit', $data);
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
        $category = CategoryModel::getSingle($id);
        $category->name = trim($request->name);
        $category->slug = trim($request->slug);
        $category->status = trim($request->status);
        $category->meta_title = trim($request->meta_title);
        $category->meta_description = trim($request->meta_description);
        $category->meta_keywords = trim($request->meta_keywords);
        $category->button_name = trim($request->button_name);
        $category->is_home = !empty($request->is_home) ? 1 : 0;
        $category->is_menu = !empty($request->is_menu) ? 1 : 0;

        if ($request->hasFile('image_name') && $request->file('image_name')->isValid()) {
            $file = $request->file('image_name');
            $ext = $file->getClientOriginalExtension();
            $randomStr = Str::random(20);
            $filename = strtolower($randomStr).'.'.$ext;
            $file->move('upload/category/', $filename);
            $category->image_name = $filename;
        }

        $category->save();

        return redirect('admin/category/list')->with('success', "Category Succesfully Updated.");
    }

    public function delete($id)
    {
        $user = CategoryModel::getSingle($id);
        $user->is_delete = 1;
        $user->save();

        return redirect('admin/category/list')->with('success', "Category Succesfully deleted.");
    }
}
