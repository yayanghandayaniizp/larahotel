<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    //
    protected $table="bookings";
    protected $fillable=['id','check_in','durasi','check_out','harga','hotel_id','tamu_id','kamar_id'];
    protected $visible=['id','check_in','durasi','check_out','harga','hotel_id','tamu_id','kamar_id'];

    public function tamu()
    {
		return $this->belongsTo('App\tamu','tamu_id');
	}

	public function hotel()
    {
		return $this->belongsTo('App\hotel','hotel_id');
	}
}

