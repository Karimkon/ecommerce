<?php

namespace App\Models;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class OrderModel extends Model
{
    use HasFactory;
    protected $table = 'orders';

    static public function getSingle($id){
        return self::find($id);
    }

    //User's Part
    static public function getTotalOrdersUser($user_id)
    {
        return self::select('id')
                    ->where('user_id', '=', $user_id)
                    ->where('is_payment', '=', 1)
                    ->where('is_delete', '=', 0)
                    ->count();
    }

    static public function getTotalTodayOrdersUser($user_id)
    {
        return self::select('id')
                    ->where('user_id', '=', $user_id)
                    ->where('is_payment', '=', 1)
                    ->where('is_delete', '=', 0)
                    ->whereDate('created_at', '=', date('Y-m-d'))
                    ->count();
    }

    static public function getTotalPaymentsUser($user_id)
    {
        return self::select('id')
                    ->where('user_id', '=', $user_id)
                    ->where('is_payment', '=', 1)
                    ->where('is_delete', '=', 0)
                    ->sum('total_amount');
    }

    static public function TotalTodayPaymentsUser($user_id)
    {
        return self::select('id')
                    ->where('user_id', '=', $user_id)
                    ->where('is_payment', '=', 1)
                    ->where('is_delete', '=', 0)
                    ->whereDate('created_at', '=', date('Y-m-d'))
                    ->sum('total_amount');
    }

    static public function getTotalStatusUser($user_id, $status)
    {
        return self::select('id')
                    ->where('status', '=', $status)
                    ->where('user_id', '=', $user_id)
                    ->where('is_payment', '=', 1)
                    ->where('is_delete', '=', 0)
                    ->count();
    }
    // End User part

    static public function getTotalOrders()
    {
        return self::select('id')
                    ->where('is_payment', '=', 1)
                    ->where('is_delete', '=', 0)
                    ->count();
    }

    static public function getTotalTodayOrders()
    {
        return self::select('id')
                    ->where('is_payment', '=', 1)
                    ->where('is_delete', '=', 0)
                    ->whereDate('created_at', '=', date('Y-m-d'))
                    ->count();
    }

    static public function getTotalPayments()
    {
        return self::select('id')
                    ->where('is_payment', '=', 1)
                    ->where('is_delete', '=', 0)
                    ->sum('total_amount');
    }

    static public function TotalTodayPayments()
    {
        return self::select('id')
                    ->where('is_payment', '=', 1)
                    ->where('is_delete', '=', 0)
                    ->whereDate('created_at', '=', date('Y-m-d'))
                    ->sum('total_amount');
    }

    static public function getLatestOrders()
    {
        return  OrderModel::select('orders.*')
                    ->where('is_payment', '=', 1)
                    ->where('is_delete', '=', 0)
                    ->orderBy('id', 'desc')
                    ->limit(10)
                    ->get();
    }



    static public function getTotalOrderMonth($startDate, $endDate)
    {
        return self::select('id')
                    ->where('is_payment', '=', 1)
                    ->where('is_delete', '=', 0)
                    ->whereDate('created_at', '>=', $startDate)
                    ->whereDate('created_at', '<=', $endDate)
                    ->count();
    }

    static public function getTotalOrderAmountMonth($startDate, $endDate)
    {
        return self::select('id')
                    ->where('is_payment', '=', 1)
                    ->where('is_delete', '=', 0)
                    ->whereDate('created_at', '>=', $startDate)
                    ->whereDate('created_at', '<=', $endDate)
                    ->sum('total_amount');
    }

    static public function getRecordUser($user_id)
    {
        return OrderModel::select('orders.*')
                    ->where('user_id', '=', $user_id)
                    ->where('is_payment', '=', 1)
                    ->where('is_delete', '=', 0)
                    ->orderBy('id', 'desc')
                    ->paginate(20);
    }

    static public function getDetailUser($user_id, $id)
    {
        return OrderModel::select('orders.*')
                    ->where('user_id', '=', $user_id)
                    ->where('id', '=', $id)
                    ->where('is_payment', '=', 1)
                    ->where('is_delete', '=', 0)
                    ->first();
    }

    static public function getRecord(Request $request)
    {
        $return = OrderModel::select('orders.*');

        if(!empty($request->get('id'))) {
            $return = $return->where('id', '=', $request->get('id'));
        }

        if(!empty($request->get('first_name'))) {
            $return = $return->where('first_name', '=', $request->get('first_name'));
        }

        if(!empty($request->get('last_name'))) {
            $return = $return->where('last_name', '=', $request->get('last_name'));
        }

        if(!empty($request->get('email'))) {
            $return = $return->where('email', '=', $request->get('email'));
        }

        if(!empty($request->get('country'))) {
            $return = $return->where('country', '=', $request->get('country'));
        }

        if(!empty($request->get('city'))) {
            $return = $return->where('city', '=', $request->get('city'));
        }

        if(!empty($request->get('from_date'))) {
            $return = $return->whereDate('created_at', '>=', $request->get('from_date'));
        }

        if(!empty($request->get('to_date'))) {
            $return = $return->whereDate('created_at', '<=', $request->get('to_date'));
        }

        $return=$return->where('is_payment', '=', 1)
                    ->where('is_delete', '=', 0)
                    ->orderBy('id', 'desc')
                    ->paginate(20);
        return $return;
    }

    public function getShipping()
    {
        return $this->belongsTo(ShippingChargeModel::class, "shipping_id");
    }

    public function getItem()
    {
        return $this->hasMany(OrderItemModel::class, "order_id");
    }



}
