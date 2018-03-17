<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hotel extends Model
{
    //
    protected $table="hotels";
    protected $fillable=['id','nama','kelas','lokasi','type_kamar','fasilitas','no_kamar'];
    protected $visible=['id','nama','kelas','lokasi','type_kamar','fasilitas','no_kamar'];

}