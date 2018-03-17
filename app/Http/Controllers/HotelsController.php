<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hotel;

class HotelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        //
        $hotel=hotel::all();
        return view('hotel.index',compact('hotel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('hotel.create');
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
         //
        $hotel = new hotel;
        $hotel->nama =$request->nama;
        $hotel->kelas=$request->kelas;
        $hotel->lokasi=$request->lokasi;
        $hotel->type_kamar =$request->type_kamar;
        $hotel->no_kamar=$request->no_kamar;
         if ($request->hasFile('fasilitas')){
            $file = $request->file('fasilitas');
            $filename = str_random(6). '_'.$file->getClientOriginalName();
            $destinationPath = public_path().DIRECTORY_SEPARATOR .'img';
            $uploadSucces=$file->move($destinationPath,$filename);
            $hotel->fasilitas = $filename;
        }
        $hotel->save();
        return redirect('/hotel');
  
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
        $hotel = hotel::all();
        return view('hotel.detail', compact('hotel','no_kamar'));
       
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
        $hotel = hotel::findOrFail($id);
        return view('hotel.edit', compact('hotel'));
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
        $hotel = hotel::findOrFail($id);
        $hotel->nama =$request->nama;
        $hotel->kelas=$request->kelas;
        $hotel->lokasi=$request->lokasi;
        $hotel->type_kamar =$request->type_kamar;
        $hotel->no_kamar=$request->no_kamar;
         if ($request->hasFile('fasilitas')){
            $file = $request->file('fasilitas');
            $filename = str_random(6). '_'.$file->getClientOriginalName();
            $destinationPath = public_path().DIRECTORY_SEPARATOR .'img';
            $uploadSucces=$file->move($destinationPath,$filename);
            $hotel->fasilitas = $filename;
        }
        $hotel->save();
        return redirect('/hotel');
        
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
        $hotel = hotel::findOrFail($id);
        $hotel->delete();
        return redirect('/hotel');
    }
}
