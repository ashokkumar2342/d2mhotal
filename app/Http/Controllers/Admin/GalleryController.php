<?php

namespace App\Http\Controllers\Admin;

use App\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallery::orderBy('id','desc')->paginate(5);       
        
        return view('admin.gallery.list',compact('gallery'));
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
      public function upload(Request $request)
    {
       $this->validate($request,[ 'title' => 'required','image'=>'required | max:800|mimes:jpg,png,jpeg']);
        

        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('gallery_image'), $imageName);
          $newimage         =   GalLery::create([
                'title'         => $request['title'],
                'image'           =>  $imageName
            ]);
         
          return redirect()->route('admin.gallery.list')->with(['message'=>'Gallery Images Upload successfully ...!','class'=>'success']);
 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
         $gallery->delete();       
        return redirect()->route('admin.gallery.list')->with(['message'=>'Gallery Images delete successfully ...!','class'=>'success']);
    }
}
