<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function hotel() {
    	return $this->belongsTo('\App\Hotel');
    }
}
