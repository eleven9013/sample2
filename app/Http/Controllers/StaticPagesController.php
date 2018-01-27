<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    //
    public function home()
    {
        Return view('static_pages/home');
    }
    public function help()
    {
        Return view('static_pages/help');
    }
    public function about()
    {
        Return view('static_pages/about');
    }
}
