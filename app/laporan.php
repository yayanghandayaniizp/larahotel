<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
    //
    protected $table="laporans";
    protected $fillable=['id','booking_id','hotel_id'];
    protected $visible=['id','booking_id','hotel_id'];

    public function booking()
    {
    	return $this->belongsTo('App\booking','booking_id');
    }

    public function hotel()
    {
    	return $this->belongsTo('App\hotel','hotel_id');
    }
}
