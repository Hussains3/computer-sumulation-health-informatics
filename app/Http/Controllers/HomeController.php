<?php

namespace App\Http\Controllers;

use App\Models\ArticleType;
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

    public function dashboard(){
        return view('dashboard.index');
    }

    public function submission()
    {
        $articleTypes = ArticleType::all();
        return view('submission',compact('articleTypes'));
    }
}
