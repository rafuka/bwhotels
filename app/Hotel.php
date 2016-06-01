<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
   // protected $fillable = ['name', 'address', 'hab_num', 'stars'];
	public function order() {
		return $this->hasMany('\App\Order');
	}

	public function user() {
		return $this->belongsTo('\App\User');
	}
}
