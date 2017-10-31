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

    public function bedrooms()
    {
    	return $this->belongsToMany('App\Models\Bedroom', 'house_bedrooms', 'house_id', 'bedroom_id');
    }

    public function amenities()
    {
    	return $this->belongsToMany('App\Models\Amenity', 'house_amenities', 'house_id', 'amenity_id');
    }
}
	