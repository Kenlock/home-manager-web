<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    //

    public function address()
    {
    	return $this->belongsTo('App\Models\Address', 'addr_id', 'id');
    }
}
