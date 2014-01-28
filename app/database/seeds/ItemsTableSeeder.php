<?php

class ItemsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('items')->truncate();

		$items = array(
			array("name"=>"eggs","checked"=>false,"number"=>6),
			array("name"=>"bread","checked"=>false,"number"=>1),
			array("name"=>"oranges","checked"=>true,"number"=>10),
			array("name"=>"bottles of water","checked"=>true,"number"=>3),
		);

		// Uncomment the below to run the seeder
		DB::table('items')->insert($items);
	}

}
