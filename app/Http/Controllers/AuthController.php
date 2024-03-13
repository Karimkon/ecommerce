<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegisterMail;

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
        return redirect('admin');
    }

    public function login_user(Request $request)
{
    $remember = $request->has('remember') ? true : false; // Simplified
    // Attempt to log the user in with 'is_admin' set to 0 to differentiate from admins
    if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'is_admin' => 0], $remember)) {
        // If successful, redirect to a user-specific page
        return redirect()->intended('user/dashboard'); // Redirect them to the user dashboard or another user-specific page
    } else {
        // If unsuccessful, redirect back with input (except password) and error message
        return redirect()->back()->withInput($request->only('email', 'remember'))->with('error', 'Invalid email or password.');
    }
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

            Mail::to($save->email)->send(new RegisterMail($save));

            $json['status'] = true;
            $json['message'] = "You have successfully created your account, please login";
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
        $user->email_verified_at = date('Y-m-d H:i:s');
        $user->save();

        return redirect(url(''))->with('success', "Email Successfully Verified");
    }
}
