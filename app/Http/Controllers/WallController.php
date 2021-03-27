<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WallController extends Controller
{
    public function Home()
    {
        return view('welcome');
    }

    public function login()
    {
        return view('login');
    }
}
