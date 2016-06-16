<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }


    public function about()
    {
        return view('master')->nest('content','about',array());
    }
}
