<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datahotel extends Model
{
    //
    protected $table="datas";
    protected $fillable=['id','no_kamar','jeniskamar','deskripsikamar','hargakamar'];
     protected $visibe=['id','no_kamar','jeniskamar','deskripsikamar','hargakamar'];
}