<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Backend\Movies;
use App\Models\Backend\UserReviews;
use App\Models\User;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function frontshow()
    {
        $mov= Movies::orderBy('created_at', 'DESC')->get();
        $engmov=Movies::all();
        $banmov=Movies::all();
        $hinmov=Movies::all();
        return view('frontend.pages.index',compact('mov','engmov','banmov','hinmov'));
    }

    public function movieDetails($id)
    {
        $rev = UserReviews::where('movieId',$id)->orderBy('created_at', 'DESC')->get();
        $revs = UserReviews::where('movieId',$id)->get();
        $mov = Movies::find($id);

        if(Auth::check()){
            $ui = Auth::user()->name;
        }
        else{
            $ui= NULL;
        }        
        $uniq= UserReviews::where('movieId',$id)->where('userName',$ui)->count();

        

        $total=0;
        foreach($revs as $revss){
            $total = $total + $revss->review; 
        }

        $current_review=0;
        $cnt=count($revs);
        if(count($revs) !=0){
        $current_review = $total/count($revs);
        $current_review =round($current_review,1);
        }

        return view('frontend.pages.movdetails', compact('mov','rev','current_review','cnt','uniq'));
    }

    public function insertreview(Request $request)
    {
        $request->validate([
            
            'ratemov'=>'required',
        ]);
        $ui = Auth::user();
        $addrev= new UserReviews();
        $addrev->movieId = $request->movid;
        $addrev->textReview = $request->wreview;
        $addrev->review = $request->ratemov;
        $addrev->userName = $ui->name;
        $addrev->save();

        

        return redirect()->route('movieDetails',$request->movid);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

   
}
