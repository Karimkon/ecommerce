<?php

namespace App\Http\Controllers;
use App\Models\ProductModel;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $data['meta_title'] = 'Ehsan Market';
        $data['meta_description'] = '';
        $data['meta_keywords'] = '';

        // Fetch products from your database
        $products = ProductModel::where('is_delete', 0)->inRandomOrder()->get();

        // Pass the products to the view
        $data['products'] = $products;

        return view('home', $data);
    }
}
