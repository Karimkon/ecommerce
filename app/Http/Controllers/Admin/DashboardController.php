<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrderModel;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function dashboard(Request $request)
    {
        $data['TotalOrders'] = OrderModel::getTotalOrders();
        $data['TotalTodayOrders'] = OrderModel::getTotalTodayOrders();
        $data['TotalPayments'] = OrderModel::getTotalPayments();
        $data['TotalTodayPayments'] = OrderModel::TotalTodayPayments();
        $data['TotalCustomer'] = User::TotalCustomers();
        $data['getLatestOrders'] = OrderModel::getLatestOrders();
        $data['header_title'] = "Dashboard";

        if (!empty($request->year)) {
            $year = $request->year;
        } else {
            $year = date('Y');
        }
        $data['year'] = $year;

        // Fetch monthly data
        $monthlyData = $this->generateMonthlyDateRange();

        // Assign monthly data to the $data array
        $data['getTotalCustomerMonth'] = $monthlyData['getTotalCustomerMonth'];
        $data['getTotalOrderMonth'] = $monthlyData['getTotalOrderMonth'];
        $data['getTotalOrderAmountMonth'] = $monthlyData['getTotalOrderAmountMonth'];

        return view('admin.dashboard', $data);
    }


    private function generateMonthlyDateRange()
{
    $year = Carbon::now()->year;
    $getTotalCustomerMonth = [];
    $getTotalOrderMonth = [];
    $getTotalOrderAmountMonth = [];

    for ($month = 1; $month <= 12; $month++) {
        $startDate = Carbon::createFromDate($year, $month, 1)->startOfMonth();
        $endDate = Carbon::createFromDate($year, $month, 1)->endOfMonth();

        $customers = User::getTotalCustomerMonth($startDate, $endDate);
        $orders = OrderModel::getTotalOrderMonth($startDate, $endDate);
        $orderAmount = OrderModel::getTotalOrderAmountMonth($startDate, $endDate);

        // Push data to respective arrays
        $getTotalCustomerMonth[] = $customers;
        $getTotalOrderMonth[] = $orders;
        $getTotalOrderAmountMonth[] = $orderAmount;
    }

    return [
        'getTotalCustomerMonth' => $getTotalCustomerMonth,
        'getTotalOrderMonth' => $getTotalOrderMonth,
        'getTotalOrderAmountMonth' => $getTotalOrderAmountMonth
    ];
}


}
