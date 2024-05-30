<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BrandModel;
use Illuminate\Support\Facades\Auth;


class BrandController extends Controller
{
    public function list()
    {
        $data['getRecord'] = BrandModel::getRecord();
        $data['header_title'] = "Brand List";
        return view('admin.brand.list', $data);
    }

    public function map()
    {

        $data['header_title'] = "Map ";
        return view('admin.track.hom', $data);
    }

    public function add()
    {
        $data['header_title'] = "Add New Brand";
        return view('admin.brand.add', $data);
    }

    public function insert(Request $request)
    {
        request()->validate([
            'slug' => 'required|unique:brand'
        ]);
        $brand = new BrandModel;
        $brand->name = trim($request->name);
        $brand->slug = trim($request->slug);
        $brand->status = trim($request->status);
        $brand->meta_title = trim($request->meta_title);
        $brand->meta_description = trim($request->meta_description);
        $brand->meta_keywords = trim($request->meta_keywords);
        $brand->created_by = Auth::user()->id;
        $brand->save();

        return redirect('admin/brand/list')->with('success', "Brand Succesfully created.");
    }

    public function edit($id)
    {
        $data['getRecord'] = BrandModel::getSingle($id);
        if(!empty($data['getRecord']))
        {
            $data['header_title'] = "Edit Selected brand";
            return view('admin.brand.edit', $data);
        }
        else
        {
            abort(404);
        }

    }

    public function update($id, Request $request)
    {
        request()->validate([
            'slug' => 'required|unique:brand,slug,'.$id
        ]);
        $brand = BrandModel::getSingle($id);
        $brand->name = trim($request->name);
        $brand->slug = trim($request->slug);
        $brand->status = trim($request->status);
        $brand->meta_title = trim($request->meta_title);
        $brand->meta_description = trim($request->meta_description);
        $brand->meta_keywords = trim($request->meta_keywords);
        $brand->save();

        return redirect('admin/brand/list')->with('success', "Brand Succesfully Updated.");
    }

    public function delete($id)
    {
        $user = BrandModel::getSingle($id);
        $user->is_delete = 1;
        $user->save();

        return redirect('admin/brand/list')->with('success', "Brand Succesfully deleted.");
    }
}
