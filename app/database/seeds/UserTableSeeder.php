<?php 
class UserTableSeeder extends Seeder 
{
	public function run() 
	{
		$user = new User();
		$user->first_name = $_ENV['USER_FIRST_NAME'];
		$user->last_name = $_ENV['USER_LAST_NAME'];
		$user->username = $_ENV['USER_NAME'];
		$user->email = $_ENV['USER_EMAIL'];
		$user->password = Hash::make($_ENV['USER_PASS']);
		$user->birthday = $_ENV['USER_BIRTH'];
		$user->phone_number = $_ENV['USER_NUMBER'];
		$user->zipcode = $_ENV['USER_ZIP'];
		$user->save();
	}
}