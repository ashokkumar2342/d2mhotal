<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BookingRequest;
use App\Mail\BookingMail;
use Mail;
class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = $request->all();
        return view('front.booking',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $booking = new BookingRequest();
        $booking->check_in = $request->checkin;
        $booking->check_out = $request->checkout;
        $booking->room = $request->room;
        $booking->adult = $request->adult;
        $booking->first_name = $request->first_name;
        $booking->last_name = $request->last_name;
        $booking->mobile = $request->mobile;
        $booking->email = $request->email;
        $booking->address1 = $request->address1;
        $booking->address2 = $request->address2;
        $booking->city = $request->city;
        $booking->country = $request->country;
        if($booking->save()){
            Mail::to('d2mhotel@gmail.com')->queue(new BookingMail($booking));

            return redirect()->route('front.home')->with(['class'=>'success','message'=>'Booking request successfully']);
        }
        return redirect()->back()->with(['class'=>'error','message'=>'Whoops, Look like somthing went wrong']);

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
        //   if ($booking->delete()) {
         
        //     return redirect()->route('front.home')->with(['class'=>'success','message'=>'Delete successfully']);

            
        // }
        // return response()->back(['message'=>'Whoops, looks like something went wrong ! Try again ...','status'=>'error']);
    }
}
