<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\booking;
use App\tamu;
use App\hotel;


class bookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $booking=booking::all();
        $tamu=tamu::all();
        return view('booking.index',compact('booking','tamu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $hotel=hotel::all();
        $tamu=tamu::all();
        return view('booking.create', compact('tamu','hotel'));
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
        $booking = new booking;
        $booking->check_in =$request->check_in;
        $booking->durasi=$request->durasi;
        $booking->check_out=$request->check_out;
        $booking->harga=$request->harga;
        $booking->hotel_id =$request->hotel_id;
        $booking->tamu_id=$request->tamu_id;


        $booking->save();
        return redirect('/booking');
  
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
        $booking = booking::all();
        return view('booking.detail', compact('booking'));
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
        $booking = booking::findOrFail($id);
        $hotel=hotel::all();
        $tamu=tamu::all();
        return view('booking.edit', compact('booking','tamu','hotel'));
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
        $booking = booking::findOrFail($id);
        $booking->check_in =$request->check_in;
        $booking->durasi=$request->durasi;
        $booking->check_out=$request->check_out;
        $booking->harga=$request->harga;
        $booking->hotel_id=$request->hotel_id;
        $booking->tamu_id=$request->tamu_id;


        $booking->save();
        return redirect('/booking');
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
        $booking = booking::findOrFail($id);
        $booking->delete();
        return redirect('/booking');
    }
}
