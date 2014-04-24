<?php


class UserUpdatesTableSeeder extends Seeder{


	public function run(){

		//Drop status table so no dupilicate entries
		DB::table('userUpdates')->delete();


		$userUpdates = array(
			array(
				'newUpdate' => 'Owner 1',
				'owner_id' => '1',
				'isDelete' => 0
				),
			array(
			'newUpdate' => 'owner 2',
				'owner_id' => '2',
				'isDelete' => 1
			),
			array(
				'newUpdate' => 'owner 1',
				'owner_id' => '1',
				'isDelete' => 0
				),
			);
		DB::table('userUpdates')->insert($userUpdates);


	}//ened run function

}//end UserUpdatesTableSeeder class