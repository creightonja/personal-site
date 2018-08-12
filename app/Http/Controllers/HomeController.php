<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class HomeController extends BaseController
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function email()
    {
        return view('email');
    }

    public function cv()
    {
        return view('cv');
    }
}
