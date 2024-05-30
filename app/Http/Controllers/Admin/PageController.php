<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageModel;
use App\Models\SystemSettingsModel;
use App\Models\ContactUsModel;
use App\Models\NotificationModel;
use App\Models\SMTPModel;
use Illuminate\Support\Str;


class PageController extends Controller
{
    public function list()
    {
        $data['getRecord'] = PageModel::getRecord();
        $data['header_title'] = "Pages List";
        return view('admin.page.list', $data);
    }

    public function edit($id)
    {
        $data['getRecord'] = PageModel::getSingle($id);
        $data['header_title'] = "Edit Page";
        return view('admin.page.edit', $data);
    }
    public function update($id, Request $request)
    {
        $page = PageModel::getSingle($id);
        $page->name = trim($request->name);
        $page->title = trim($request->title);
        $page->description = trim($request->description);
        $page->meta_description = trim($request->meta_description);
        $page->meta_title = trim($request->meta_title);
        $page->meta_keywords = trim($request->meta_keywords);
        $page->save();

        if(!empty($request->file('image')))
            {
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $randomStr = $page->id.Str::random(20);
                $filename = strtolower($randomStr).'.'.$ext;
                $file->move('upload/page/', $filename);

                $page->image_name = trim($filename);
                $page->save();
            }

        return redirect('admin/page/list')->with('success', "Page Succesfully Updated.");
    }

    public function contactus()
    {
        $data['getRecord'] = ContactUsModel::getRecord();
        $data['header_title'] = "Contacts";
        return view('admin.contactus.list', $data);

    }

    public function contactus_delete($id)
    {
        ContactUsModel::where('id', '=', $id)->delete();
        return redirect()->back()->with('error', "Message Deleted !");

    }
    
    public function system_setting()
    {
        $data['getRecord'] = SystemSettingsModel::getSingle();
        $data['header_title'] = "System Settings";
        return view('admin.setting.system_setting', $data);

    }

    public function update_system_setting(Request $request)
    {
        $save = SystemSettingsModel::getSingle();
        $save->website_name = trim($request->website_name);
        if(!empty($request->file('logo')))
            {
                $file = $request->file('logo');
                $ext = $file->getClientOriginalExtension();
                $randomStr = Str::random(10);
                $filename = strtolower($randomStr).'.'.$ext;
                $file->move('upload/setting/', $filename);

                $save->logo = trim($filename);
            }

        if(!empty($request->file('fevicon')))
            {
                $file = $request->file('fevicon');
                $ext = $file->getClientOriginalExtension();
                $randomStr = Str::random(10);
                $filename = strtolower($randomStr).'.'.$ext;
                $file->move('upload/setting/', $filename);

                $save->fevicon = trim($filename);
            }

        $save->footer_description = trim($request->footer_description);
        if(!empty($request->file('footer_payment_icon')))
        {
            $file = $request->file('footer_payment_icon');
            $ext = $file->getClientOriginalExtension();
            $randomStr = Str::random(10);
            $filename = strtolower($randomStr).'.'.$ext;
            $file->move('upload/setting/', $filename);

            $save->footer_payment_icon = trim($filename);
        }

        $save->address = trim($request->address);
        $save->phone = trim($request->phone);
        $save->phone_two = trim($request->phone_two);
        $save->submit_email = trim($request->submit_email);
        $save->email = trim($request->email);
        $save->email_two = trim($request->email_two);
        $save->working_hours = trim($request->working_hours);
        $save->facebook_link = trim($request->facebook_link);
        $save->instagram_link = trim($request->instagram_link);
        $save->twiter_link = trim($request->twiter_link);
        $save->youtube_link = trim($request->youtube_link);

        $save->save();

        return redirect()->back()->with('success', "System Settings Succesfully Updated.");
    }

    public function notification()
    {
        $data['getRecord'] = NotificationModel::getRecord();
        $data['header_title'] = "Notifications";
        return view('admin.notification.list', $data);
    }
    
    public function smtp_setting()
    {
        $data['getRecord'] = SMTPModel::getSingle();
        $data['header_title'] = "SMTP Configurations";
        return view('admin.setting.smtp_setting', $data);
    }

    public function update_smtp_setting(Request $request)
    {
        $save = SMTPModel::getSingle();
        $save->name = trim($request->name);
        $save->mail_mailer = trim($request->mail_mailer);
        $save->mail_host = trim($request->mail_host);
        $save->mail_port = trim($request->mail_port);
        $save->mail_username = trim($request->mail_username);
        $save->mail_password = trim($request->mail_password);
        $save->mail_encryption = trim($request->mail_encryption);
        $save->mail_from_address = trim($request->mail_from_address);

        $save->save();

        return redirect()->back()->with('success', "SMTP Configurations Succesfully Updated.");
    }
    

}

