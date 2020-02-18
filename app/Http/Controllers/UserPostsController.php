<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
Use App\User;
use Validator,Redirect,Response;
use Illuminate\Support\Facades\Auth;
use DB;

class UserPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    if(Auth::check()){
        $images = Image::select('title','name','id','privacy')->where('user_id',auth()->id())->latest()->get();
        return view('userPosts',compact('images'));
    }
    return Redirect::to("main")->with('message','Opps! You do not have access');
}


    public function delete(Request $request)
    {
        if(Auth::check()){
            Image::where('id', $request->post('deletePost'))->delete();
            $images = Image::select('title','name','id','privacy')->where('user_id',auth()->id())->get();
            //FIXME dodaj zabezpieczenie zeby ktos nie powolany nie usuwal
            return view('userPosts',compact('images'));
        }
    return Redirect::to("main")->with('message','Opps! You do not have access');
    }


    public function public(Request $request)
    {
        if(Auth::check()){
            DB::update('update images set privacy = ? where id = ?',[0,$request->post('publicPost')]);
            //FIXME only fur zalogowanego usera
            $images = Image::select('title','name','id','privacy')->where('user_id',auth()->id())->get();
            return view('userPosts',compact('images'));
        }
        return Redirect::to("main")->with('message','Opps! You do not have access');
    }

    public function privata(Request $request)
    {
        if(Auth::check()){
            DB::update('update images set privacy = ? where id = ?',[1,$request->post('privatePost')]);
            $images = Image::select('title','name','id','privacy')->where('user_id',auth()->id())->get();
            return view('userPosts',compact('images'));
        }
        return Redirect::to("main")->with('message','Opps! You do not have access');
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
