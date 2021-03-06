<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;


class HouseController extends Controller
{
    //

    public function show($id)
    {
    	$house = House::findOrFail($id);
    	$house->address;
    	$house->bedrooms;
    	$house->amenities;

    	//dd($house);
    	return view('House.show', compact('house'));
    }
}
