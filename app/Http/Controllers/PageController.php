<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        date_default_timezone_set('Asia/kuwait');
        $hour = date('G');
        return view('pages.home',
        [
            'name' => 'Jassim',
            'tag'  => 'we are creating innovative web application',
            'hour' => $hour
        ]);
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function about()
    {
        return view('pages.about');
    }
}
