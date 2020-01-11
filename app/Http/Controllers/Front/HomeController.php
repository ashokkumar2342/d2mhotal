<?php

namespace App\Http\Controllers\Front;
use App\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
 

 

class HomeController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function about()
    {
        return view('front.about');
    }

    public function menu()
    {
        return view('front.menu');
    }

    public function beverages()
    {
        return view('front.beverages');
    }

    public function executive()
    {
        return view('front.executive');
    }

   
    public function superDelux()
    {
        return view('front.superDelux');
    }

   
    public function birthday()
    {
        return view('front.birthday');
    }

    public function kitty()
    {
        return view('front.kitty');
    }

    public function wedding()
    {
        return view('front.wedding');
    }
  
    public function anniversary()
    {
        return view('front.anniversary');
    }
  
    public function business()
    {
        return view('front.business');
    }
     public function gallery()
    {
     $galleries = Gallery::orderBy('id','desc')->paginate(8);       
        
        return view('front.gallery',compact('galleries'));
         
    }
      public function other()
    {
        return view('front.other-evets');
    }
    
}
