<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataKamarController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        //
        $data=data::all();
        return view('datakamar.index',compact('datakamar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('datakamar.create');
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
        $data = new data;
        $data->no_kamar =$request->no_kamar;
        $data->jeniskamar=$request->jeniskamar;
        $data->deskripsikamar=$request->deskripsikamar;
        $data->hargakamar =$request->hargakamar;
       
         if ($request->hasFile('fasilitas')){
            $file = $request->file('fasilitas');
            $filename = str_random(6). '_'.$file->getClientOriginalName();
            $destinationPath = public_path().DIRECTORY_SEPARATOR .'img';
            $uploadSucces=$file->move($destinationPath,$filename);
            $data->fasilitas = $filename;
        }
        $data->save();
        return redirect('/datakamar');
  
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
        $data = data::all();
        return view('datakamar.detail', compact('datakamar','no_kamar'));
       
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
        $data = data::findOrFail($id);
        return view('datakamar.edit', compact('datakamar'));
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
        $data = data::findOrFail($id);
        $data->no_kamar=$request->no_kamar;
        $data->jeniskamar =$request->jeniskamar;
        $data->deskripsikamar=$request->deskripsikamar;
        $data->hargakamar=$request->hargakamar;
    
        }
        $data->save();
        return redirect('/datakamar');
        
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
        $data = data::findOrFail($id);
        $data->delete();
        return redirect('/datakamar');
    }
}
