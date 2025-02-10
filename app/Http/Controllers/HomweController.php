<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomweController extends Controller
{
    public function index()
    {
        return view('home');
    }
}
