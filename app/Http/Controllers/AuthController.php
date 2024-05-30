<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\NotificationModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegisterMail;
use App\Mail\ForgotPasswordMail;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login_admin()
    {
        if(!empty(Auth::check()) && Auth::user()->is_admin == 1)
        {
            return redirect('admin/dashboard');
        }
        return view('admin.auth.login');
    }

    public function auth_login_admin(Request $request)
    {
        $remember = !empty($request->remember) ? true : false;
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'is_admin' => 1, 'status' => 0, 'is_delete' => 0], $remember))
        {
            return redirect('admin/dashboard');
        }
        else
        {
            return redirect()->back()->with('error', "Invalid Email or Password, please try again or contact 0707208954");
        }
        return view('admin.auth.login');
    }

    public function logout_admin()
    {
        Auth::logout();
        return redirect('');
    }

    public function auth_login(Request $request)
{
    $remember = !empty($request->remember) ? true : false;

    if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'status' => 0, 'is_delete' => 0], $remember)) {
        $json['status'] = true;
        $json['message'] = "success";
    } else {
        $json['status'] = false;
        $json['message'] = "Invalid email or password.";
    }

    echo json_encode($json);
}



    public function auth_register(Request $request)
    {
        $checkEmail = User::checkEmail($request->email);
        if(empty($checkEmail))
        {
            $save = new User;
            $save->name = trim($request->name);
            $save->email = trim($request->email);
            $save->password = Hash::make($request->password);
            $save->save();

            try{
                Mail::to($getOrder->email)->send(new OrderInvoiceMail($getOrder));
            }
            catch (\Exeption $e) {

            }

            $user_id = 1;
            $url = url('admin/customer/list/');
            $message = 'New Customer Register #'.$request->name;

            NotificationModel::insertRecord($user_id, $url, $message);

            $json['status'] = true;
            $json['message'] = "You have successfully created your account, please verify your E-mail and Login";
        }
        else
        {
            $json['status'] = false;
            $json['message'] = "Hi, Assalam alaikum, this emails is already taken, please try again with another email, thank you 😊";
        }

        echo json_encode($json);

    }

    public function activate_email($id)
{
    $id = base64_decode($id);
    $user = User::getSingle($id);

    if ($user) {
        $user->email_verified_at = date('Y-m-d H:i:s');
        $user->save();
        return redirect(url(''))->with('success', "Email Successfully Verified");
    } else {
        // Handle case where user is not found
        return redirect(url(''))->with('error', "User not found or invalid activation link");
    }
}


    public function forgot_password(Request $request)
    {
        $data['meta_title'] = "Forgot Password";
        return view('auth.forgot', $data);
    }

    public function auth_forgot_password(Request $request)
    {
        $user = User::where('email', '=', $request->email)->first();
        if(!empty($user))
        {
            $user->remember_token = Str::random(30);
            $user->save();

            Mail::to($user->email)->send(new ForgotPasswordMail($user));
            return redirect()->back()->with("success", 'Check Your Inbox 📩 for a new password reset');
        }
        else
        {
            return redirect()->back()->with("error", 'Email Not available');
        }
    }

    public function reset($token)
    {
        $user = User::where('remember_token', '=', $token)->first();
        if(!empty($user))
        {
            $data['user'] = $user;
            $data['meta_title'] = "Reset Password";
            return view('auth.reset', $data);
        }
        else
        {
            abort(404);
        }

    }

    public function auth_reset($token, Request $request)
    {
        if($request->password == $request->cpassword)
        {
            $user = User::where('remember_token', '=', $token)->first();
            $user->password = Hash::make($request->password);
            $user->remember_token = Str::random(30);
            $user->save();
            return redirect(url(''))->with("success", 'Password successfully reset, please login');
        }
        else
        {
            return redirect()->back()->with("error", 'Password doesn not match, please try again');
        }

    }
}
