<?php

namespace App\Http\Controllers;

use App\tamu;
use Illuminate\Http\Request;

class tamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        //
        $tamu=tamu::all();
        return view('tamu.index',compact('tamu'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('tamu.create');
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
        $tamu = new tamu;
        $tamu->nama =$request->nama;
        $tamu->jenis_kelamin =$request->jenis_kelamin;
        $tamu->no_ktp=$request->no_ktp;
        $tamu->no_telpon=$request->no_telpon;
        $tamu->alamat=$request->alamat;

        $tamu->save();
        return redirect('/tamu');
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
        $tamu = tamu::all();
        return view('tamu.detail', compact('tamu'));
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
        $tamu = tamu::findOrFail($id);
        return view('tamu.edit', compact('tamu'));
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
        $tamu = tamu::findOrFail($id);
        $tamu->nama =$request->nama;
        $tamu->jenis_kelamin =$request->jenis_kelamin;
        $tamu->no_ktp=$request->no_ktp;
        $tamu->no_telpon=$request->no_telpon;
        $tamu->alamat=$request->alamat;

        $tamu->save();  
        return redirect('/tamu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tamu = tamu::findOrFail($id);
        $tamu->delete();
        return redirect('/tamu');
    }
}
