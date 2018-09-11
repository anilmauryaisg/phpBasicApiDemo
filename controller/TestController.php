<?php

class TestController {


	public function userData() {

		//Create-Users-Array
		$users[] = array(
			'userId' 	=> 101,
			'userName' 	=> 'Rahul Kumar',
			'userEmail' => 'rahul@test.com'
		);
		$users[] = array(
			'userId' 	=> 102,
			'userName' 	=> 'Sunil Kumar',
			'userEmail' => 'sunil@test.com'
		);


		//nor return that data as json via api
		return $users;
	}
}