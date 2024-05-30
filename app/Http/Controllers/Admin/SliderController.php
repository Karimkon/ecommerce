<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SliderModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class SliderController extends Controller
{
    public function list()
    {
        $data['getRecord'] = SliderModel::getRecord();
        $data['header_title'] = "Sliders List";
        return view('admin.slider.list', $data);
    }

    public function add()
    {
        $data['header_title'] = "Add New Slider";
        return view('admin.slider.add', $data);
    }

    public function insert(Request $request)
    {

        $slider = new SliderModel;
        $slider->title = trim($request->title);
        $slider->button_name = trim($request->button_name);
        $slider->button_link = trim($request->button_link);
        $slider->description = trim($request->description);

        $file = $request->file('image_name');
        $ext = $file->getClientOriginalExtension();
        $randomStr = Str::random(20);
        $filename = strtolower($randomStr).'.'.$ext;
        $file->move('assets/images/slider/', $filename);
        $slider->image_name = trim($filename);

        $slider->status = trim($request->status);
        $slider->save();

        return redirect('admin/slider/list')->with('success', "Slider Succesfully created.");
    }

    public function edit($id)
    {
        $data['getRecord'] = SliderModel::getSingle($id);
        if(!empty($data['getRecord']))
        {
            $data['header_title'] = "Edit Selected Slider Charge";
            return view('admin.slider.edit', $data);
        }
        else
        {
            abort(404);
        }

    }
    public function update($id, Request $request)
    {
        $slider = SliderModel::findOrFail($id);
        $slider->title = trim($request->title);
        $slider->button_name = trim($request->button_name);
        $slider->button_link = trim($request->button_link);
        $slider->description = trim($request->description);
    
        if ($request->hasFile('image_name') && $request->file('image_name')->isValid()) {
            $file = $request->file('image_name');
            $ext = $file->getClientOriginalExtension();
            $randomStr = Str::random(20);
            $filename = strtolower($randomStr).'.'.$ext;
            $file->move('assets/images/slider/', $filename);
            $slider->image_name = $filename;
        }
    
        $slider->status = trim($request->status);
        $slider->save();
    
        return redirect('admin/slider/list')->with('success', "Slider Successfully Updated.");
    }

    public function delete($id)
    {
        $color = SliderModel::getSingle($id);
        $color->is_delete = 1;
        $color->save();

        return redirect('admin/slider/list')->with('error', "Slider Succesfully deleted.");
    }
}

