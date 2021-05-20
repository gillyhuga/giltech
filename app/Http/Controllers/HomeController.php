<?php

namespace App\Http\Controllers;
use App\Models\News;
use App\Models\Author;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        $news = News::all();		
        return view('user/index', compact('authors', 'news'));
    }
}
