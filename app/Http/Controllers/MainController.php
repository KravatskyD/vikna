<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class MainController extends BaseController
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('home');
    }
}
