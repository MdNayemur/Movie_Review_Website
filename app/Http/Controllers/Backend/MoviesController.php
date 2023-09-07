<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Origin;
use App\Models\Backend\Movies;
use Image;
use File;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movall=Movies::all();
        return view('backend.pages.movies.managemovies', compact('movall'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $orname=Origin::all();
        return view('backend.pages.movies.addmovies', compact('orname'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                
        $request->validate([
            'orid'=>'required',
            'gen'=>'required',
            'name'=>'required',
            'des'=>'required',
            'image'=>'required'
        ]);

        $addmov= new Movies();
        $addmov->originId = $request->orid;
        $addmov->genre = $request->gen;
        $addmov->mname = $request->name;
        $addmov->description = $request->des;


        if($request->image){
            $image = $request->file('image');
            $nameCustom=time().'.'.$image->getClientOriginalExtension();
            $location=public_path('backend/moviesimage/'.$nameCustom);
            $check=Image::make($image)->resize(200,200)->save($location);
            $addmov->img=$nameCustom;
        }

        $addmov->save();
        return back();
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
        $mov=Movies::find($id);
        $ori=Origin::all();
        return view('backend.pages.movies.editmovies', compact('mov','ori'));
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
            'orid'=>'required',
            'gen'=>'required',
            'name'=>'required',
            'des'=>'required',
            'image'=>'required'
        ]);

        $movi=Movies::find($id);
       
        $movi->originId = $request->orid;
        $movi->genre = $request->gen;
        $movi->mname = $request->name;
        $movi->description = $request->des;

        if(!empty($request->image)){
            if(File::exists('backend/moviesimage/'.$movi->img)){
                File::delete('backend/moviesimage/'.$movi->img);
            }
            $image = $request->file('image');
            $nameCustom=time().'.'.$image->getClientOriginalExtension();
            $location=public_path('backend/moviesimage/'.$nameCustom);
            $check=Image::make($image)->resize(200,200)->save($location);
            $movi->img=$nameCustom;
        }
        $movi->update();
        return redirect()->route('managemovie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=Movies::find($id);
        File::delete('backend/moviesimage/'.$del->img);
        $del->delete();
        return redirect()->route('managemovie');  
    }
}
