<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\laporan;
use App\booking;
use App\hotel;




class laporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $laporan=laporan::all();
        $booking=booking::all();
        return view('laporan.index',compact('laporan','booking'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $laporan=booking::all();
        $hotel=hotel::all();
        return view('laporan.create', compact('laporan','hotel'));

         }

    public function downloadPDF(Request $request){
        $a = $request->a; 
        $b = $request->b;
        $penjualan1 = Transaksi::whereBetween('created_at', [$a, $b])->get(); 
        $sum = $penjualan1->sum('total');
      $user = Transaksi::all();

      $pdf = PDF::loadView('laporan.pdf', compact('user','a','b','sum'));
      return $pdf->download('laporan.pdf');

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
        $laporan = new laporan;
        $laporan->hotel_id =$request->hotel_id;
        $laporan->booking_id = $request->booking_id;
        

        $laporan->save();
        return redirect('/laporan');
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
