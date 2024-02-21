<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductModel;

class DashboardController extends Controller
{
    public function dashboard(Request $request)
    {
        $data['header_title'] = "Dashboard";
        $data['getProduct'] = ProductModel::getRecord($request);
        return view('admin.dashboard', $data);
    }

}
