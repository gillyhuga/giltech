<?php

namespace App\Http\Controllers;
use App\Models\News;
use App\Models\Author;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        $news = News::all();		
        return view('admin/dashboard', compact('authors', 'news'));
    }

    
}
