<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
       return view('index');
    }

    public function articleShow()
    {
        return view('articles.show');
    }

    public function editors()
    {
        return view('editors.index');
    }
}
