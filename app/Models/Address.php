<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //
    public function __toString() 
    {
    	return $this->unit.', '.$this->street_no.' '.$this->street.', '.$this->suburb.', '.$this->state.' '.$this->postal_code.', '.$this->country;
    }
}
