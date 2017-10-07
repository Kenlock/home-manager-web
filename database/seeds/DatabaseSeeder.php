<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

    	// address

    	$data = array([
    		'unit' => '13',
    		'street_no' => '18',
    		'street' => 'Mascar Streeet',
    		'suburb' => 'Upper Mount Gravatt',
    		'state' => 'QLD',
    		'country' => 'Australia',
    		'postal_code' => '4122'
    	]);

    	DB::table('addresses')->insert($data);

    	// House

    	$data = array([
			'name' => 'Boutique Apartment',
			'rate' => 484,
			'max_guests' => 6,
			'max_parking' => 2,
			'bathrooms' => 2,
			'area' => 130,
			'desc' => 'good apartment near garden city',
			'type' => 'apartment',
			'addr_id' => 1,
    	]);

    	DB::table('houses')->insert($data);

    	//



    }
}
