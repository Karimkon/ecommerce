<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderModel;
use App\Models\ProductImageModel;
use App\Models\ProductWishlistModel;
use App\Models\NotificationModel;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\ProductReviewModel;

class UserController extends Controller
{
    public function dashboard()
    {
        $data['meta_title'] = 'User Dashboard';
        $data['meta_description'] = '';
        $data['meta_keywords'] = '';

        $data['TotalOrders'] = OrderModel::getTotalOrdersUser(Auth::user()->id);
        $data['TotalTodayOrders'] = OrderModel::getTotalTodayOrdersUser(Auth::user()->id);
        $data['TotalPayments'] = OrderModel::getTotalPaymentsUser(Auth::user()->id);
        $data['TotalTodayPayments'] = OrderModel::TotalTodayPaymentsUser(Auth::user()->id);

        $data['TotalPending'] = OrderModel::getTotalStatusUser(Auth::user()->id, 0);
        $data['TotalInprogress'] = OrderModel::getTotalStatusUser(Auth::user()->id, 1);
        $data['TotalCompleted'] = OrderModel::getTotalStatusUser(Auth::user()->id, 3);
        $data['TotalCancelled'] = OrderModel::getTotalStatusUser(Auth::user()->id, 4);

        return view('users.dashboard', $data);
    }


    public function user_order(Request $request)
    {
        if(!empty($request->notification_id))
        {
            NotificationModel::updateReadNoti($request->notification_id);
        }
        $data['getRecord'] = OrderModel::getRecordUser(Auth::user()->id);
        $data['meta_title'] = 'My Orders';
        $data['meta_description'] = '';
        $data['meta_keywords'] = '';

        return view('users.customers_order', $data);

    }

    public function user_order_details($id)
    {
        $data['getRecord'] = OrderModel::getDetailUser(Auth::user()->id, $id);
        if(!empty($data['getRecord']))
        {
        $data['meta_title'] = 'My Order Details';
        $data['meta_description'] = '';
        $data['meta_keywords'] = '';

        return view('users.customers_order_details', $data);

        }
        else
        {
            abort(404);
        }

    }

    public function edit_profile()
    {
        $data['meta_title'] = 'My Profile';
        $data['meta_description'] = '';
        $data['meta_keywords'] = '';
        $data['getRecord'] = User::getSingle(Auth::user()->id);

        return view('users.edit-profile', $data);
    }


    public function update_profile(Request $request)
    {
        $user = User::getSingle(Auth::user()->id);
        $user->name = trim($request->name);
        $user->last_name = trim($request->last_name);
        $user->company_name = trim($request->company_name);
        $user->country = trim($request->country);
        $user->address_one = trim($request->address_one);
        $user->address_two = trim($request->address_two);
        $user->city = trim($request->city);
        $user->state = trim($request->state);
        $user->postcode = trim($request->postcode);
        $user->phone = trim($request->phone);
        $user->email = trim($request->email);
        $user->save();

        return redirect()->back()->with("success", 'Profile updated successfully');
    }

    public function notifications(Request $request)
    {
        $data['meta_title'] = 'My Notifications';
        $data['meta_description'] = '';
        $data['meta_keywords'] = '';
        $data['getRecord'] = NotificationModel::getRecordUser(Auth::user()->id);

        return view('users.notification', $data);
    }

    public function change_password()
    {
        $data['meta_title'] = 'Change Password';
        $data['meta_description'] = '';
        $data['meta_keywords'] = '';

        return view('users.change-password', $data);
    }

    public function update_password(Request $request)
    {
        $user = User::find(Auth::user()->id);

        if (Hash::check($request->old_password, $user->password)) {
            if ($request->password == $request->cpassword) {
                $user->password = Hash::make($request->password);
                $user->save();

                return redirect()->back()->with("success", 'Your password has been successfully changed.');
            } else {
                return redirect()->back()->with("error", 'The new password and password confirmation do not match. Please try again.');
            }
        } else {
            return redirect()->back()->with("error", 'The old password you entered is incorrect. Please try again.');
        }
    }

    public function add_to_wishlist(Request $request)
    {
        $check = ProductWishlistModel::checkAlready($request->product_id, Auth::user()->id);
        if(empty($check))
        {
        $save =  new ProductWishlistModel;
        $save->product_id = $request->product_id;
        $save->user_id = Auth::user()->id;
        $save->save();

        $json['is_wishlist'] = 1;

        }
        else
        {
            ProductWishlistModel::DeleteRecord($request->product_id, Auth::user()->id);
            $json['is_wishlist'] = 0;

        }

        $json['status'] = true;
        echo json_encode($json);

    }

    public function submit_review(Request $request)
    {
        $save = new ProductReviewModel;
        $save->product_id = trim($request->product_id);
        $save->user_id = Auth::user()->id;
        $save->order_id = trim($request->order_id);
        $save->rating = trim($request->rating);
        $save->review = trim($request->review);
        $save->save();

        return redirect()->back()->with("success", 'Thank you for your review 😊.');

    }
}
