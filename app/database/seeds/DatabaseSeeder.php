<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		DB::table('posts')->DELETE();
		DB::table('users')->DELETE();


		$this->call('UserTableSeeder');
		$this->call('PostTableSeeder');
	}

}
