<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PartnerModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class PartnerController extends Controller
{
    public function list()
    {
        $data['getRecord'] = PartnerModel::getRecord();
        $data['header_title'] = "Partner List";
        return view('admin.partner.list', $data);
    }

    public function add()
    {
        $data['header_title'] = "Add New partner";
        return view('admin.partner.add', $data);
    }

    public function insert(Request $request)
    {

        $partner = new PartnerModel;
        $partner->button_link = trim($request->button_link);

        $file = $request->file('image_name');
        $ext = $file->getClientOriginalExtension();
        $randomStr = Str::random(20);
        $filename = strtolower($randomStr).'.'.$ext;
        $file->move('upload/partner/', $filename);
        $partner->image_name = trim($filename);

        $partner->status = trim($request->status);
        $partner->save();

        return redirect('admin/partner/list')->with('success', "partner Succesfully created.");
    }

    public function edit($id)
    {
        $data['getRecord'] = PartnerModel::getSingle($id);
        if(!empty($data['getRecord']))
        {
            $data['header_title'] = "Edit Selected partner Charge";
            return view('admin.partner.edit', $data);
        }
        else
        {
            abort(404);
        }

    }
    public function update($id, Request $request)
    {
        $partner = PartnerModel::findOrFail($id);
        $partner->button_link = trim($request->button_link);
    
        if ($request->hasFile('image_name') && $request->file('image_name')->isValid()) {
            $file = $request->file('image_name');
            $ext = $file->getClientOriginalExtension();
            $randomStr = Str::random(20);
            $filename = strtolower($randomStr).'.'.$ext;
            $file->move('upload/partner/', $filename);
            $partner->image_name = $filename;
        }
    
        $partner->status = trim($request->status);
        $partner->save();
    
        return redirect('admin/partner/list')->with('success', "partner Successfully Updated.");
    }

    public function delete($id)
    {
        $color = PartnerModel::getSingle($id);
        $color->is_delete = 1;
        $color->save();

        return redirect('admin/partner/list')->with('error', "partner Succesfully deleted.");
    }
}

