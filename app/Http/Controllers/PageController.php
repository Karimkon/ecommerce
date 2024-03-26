<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        $data['meta_title'] = 'About Ehsan Market';
        $data['meta_description'] = '';
        $data['meta_keywords'] = '';

        return view('nav.about', $data);
    }
}
