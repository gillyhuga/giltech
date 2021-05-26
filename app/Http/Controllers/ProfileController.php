<?php

namespace App\Http\Controllers;
use App\Models\Author;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $authors = Author::all();	
        return view('user/profile', compact('authors'));
    }
}
