<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class ImageController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('newPost');
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' =>'required'

        ]);



        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $name = date('YmdHis')."".$image->getClientOriginalName();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);

            $privat =0;
            if(!$request->has('privacy'))
            {
                $privat = 0;
            }
            else
            {
                $privat = 1;
            }

            $img = new Image();
            $img->fill(['name'=>date('YmdHis')."".$image->getClientOriginalName(),'extension'=>$image->getClientOriginalExtension(),
                'privacy'=>$privat,'title'=>$request->input('title'),'user_id'=>auth()->id()]);
            $img->save();
            //'privacy'=>((new \Illuminate\Http\Request)->input('privacy')) ? 0 : 1
        }
        return Redirect::to("dashboard")->with('message', 'Great! Image has been successfully uploaded.');
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
    {        //

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
