<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\House;

class BookingController extends Controller
{
    //
    public function confirmation(Request $request)
    {
    	$input = $request->all();

    	$house_id = $input['house_id'];
    	$house = House::findOrFail($house_id);


    	$check_in = Carbon::createFromFormat('d-m-Y', $input['check_in']);
    	$check_out = Carbon::createFromFormat('d-m-Y', $input['check_out']);

    	$daysDiff = $check_in->diffInDays($check_out);

    	$house->check_in = $check_in;
    	$house->check_out= $check_out;
    	$house->days = $daysDiff;
    	$house->total_amount = $daysDiff * $house->rate;

    	$house->address;
        


    	return view('Booking.confirmation', compact('house'));

    }
}
