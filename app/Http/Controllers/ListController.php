<?php

namespace App\Http\Controllers;
use App\Models\News;

use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index()
    {
        $news = News::all();	
        return view('user/listapp', compact('news'));
    }
}
