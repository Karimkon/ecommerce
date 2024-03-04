<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
<<<<<<< HEAD
        $data['meta_title'] = 'Ehsan Market';
=======
        $data['meta_title'] = '';
>>>>>>> 6429054ee2b2a04a311007c971bc64fc5d636dc0
        $data['meta_description'] = '';
        $data['meta_keywords'] = '';

        return view('home', $data);
    }
}
