<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tamu extends Model
{
    //
    protected $table="tamus";
    protected $fillable=['id','nama','jenis_kelamin','no_ktp','no_telpon','alamat'];
    protected $visible=['id','nama','jenis_kelamin','no_ktp','no_telpon','alamat'];

    public function booking()
    {
		return $this->hasMany('App\booking','tamu_id');
	}
}
