<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\NotificationModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function list(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');

        $data['getRecord'] = User::getAdmin($name, $email);
        $data['header_title'] = "Admin List";
        $data['query'] = (object) [
            'name' => $name,
            'email' => $email,
        ];

        return view('admin.admin.list', $data);
    }

    public function add()
    {
        $data['header_title'] = "Add New Admin";
        return view('admin.admin.add', $data);
    }
    public function insert(Request $request)
    {
        request()->validate([
            'email' => 'required|email|unique:users'
        ]);
        $user = new User;
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->password = Hash::make($request->password);
        $user->is_admin = 1;
        if(!empty($request->file('profile_pic')))
        {
            $ext = $request->file('profile_pic')->getClientOriginalExtension();
            $file = $request->file('profile_pic');
            $randomStr = date('Ymdhis').Str::random(20);
            $filename = strtolower($randomStr).'.'.$ext;
            $file->move('upload/profile/', $filename);

            $user->profile_pic = $filename;

        }
        $user->save();

        return redirect('admin/admin/list')->with('success', "Admin Succesfully created.");
    }
    public function edit($id)
    {
        $data['getRecord'] = User::getSingle($id);
        if(!empty($data['getRecord']))
        {
            $data['header_title'] = "Edit Selected Admin";
            return view('admin.admin.edit', $data);
        }
        else
        {
            abort(404);
        }

    }
    public function update($id, Request $request)
    {
        request()->validate([
            'email' => 'required|email|unique:users,email,'.$id
        ]);
        $user = User::getSingle($id);
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        if(!empty($request->password))
        {
            $user->password = Hash::make($request->password);
        }
        if(!empty($request->file('profile_pic')))
        {
            if(!empty($user->getProfile()))
            {
                unlink('upload/profile/'.$user->profile_pic);
            }
            $ext = $request->file('profile_pic')->getClientOriginalExtension();
            $file = $request->file('profile_pic');
            $randomStr = date('Ymdhis').Str::random(20);
            $filename = strtolower($randomStr).'.'.$ext;
            $file->move('upload/profile/', $filename);

            $user->profile_pic = $filename;

        }

        $user->is_admin = 1;
        $user->save();

        return redirect('admin/admin/list')->with('success', "Admin Succesfully updated.");
    }

    public function delete($id)
    {
        $user = User::getSingle($id);
        $user->is_delete = 1;
        $user->save();

        return redirect('admin/admin/list')->with('success', "User / Admin Succesfully deleted.");
    }

    public function customer_list(Request $request)
    {
        if(!empty($request->notification_id))
        {
            NotificationModel::updateReadNoti($request->notification_id);
        }

        $data['header_title'] = "Customers";
        $data['getRecord'] = User::getCustomer($request);
        return view('admin.customer.list', $data);
    }
}
