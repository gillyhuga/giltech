<?php

namespace App\Http\Controllers;
use App\Models\Author;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Author::with('news')->get();
        $authors = Author::with('news')->get();	
        return view('admin/authors', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/createAuthor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->picture);

        $request->validate([
            'name' => 'required|max:100',
            'picture' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'address' => 'required|max:250',
            
            ]);

            $imgName = $request->picture->getClientOriginalName(). '-'.time()
                                            .'.'.$request->picture->extension();
            $request->picture->move(public_path('images'),$imgName);


            $data =Author::create([
                'name' => $request->name,
                'picture' => $imgName,
                'address' => $request->address,
                ]);
            // $data->news()->attach($request->input('news_id'));
    
            
            return redirect()->route('authors.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $authors = Author::findOrFail($id);
        return view('admin/editAuthor', compact('authors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:100',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'address' => 'required|max:250',
            ]);
            Author::findOrFail($id)->update([
            'name' => $request->name,
            'picture' => $request->picture,
            'address' => $request->address,
            ]);
            $model = Author::find($id);
            $model->touch();
            return redirect()->route('authors.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Author::findOrFail($id)->delete();
        return redirect()->back();
    }
}
