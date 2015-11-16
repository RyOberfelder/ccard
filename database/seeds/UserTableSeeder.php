<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

    User::create(array(
			'email' => 'BenHu@awesome.com',
			'fname' => 'Ben',
			'lname' => 'Hu',
      'uname' => 'BenHu',
      'city' => 'Chapel Hill',
      'state' => 'NC',
      'country' => 'United States',
      'description' => 'Sometimes the is a fire in the world and we have to get it out',
			'password' => Hash::make('password')
		));

    User::create(array(
			'email' => 'blam@awesome.com',
			'fname' => 'Brandon',
			'lname' => 'Lam',
      'uname' => 'Blam',
      'city' => 'Chapel Hill',
      'state' => 'NC',
      'country' => 'United States',
      'description' => 'Sometimes the is a fire in the world and we have to get it out',
			'password' => Hash::make('password')
		));

		User::create(array(
			'email' => 'RyOberfelder@gmail.com',
			'fname' => 'Ryan',
			'lname' => 'Oberfelder',
      'uname' => 'RyOberfelder',
      'city' => 'Chapel Hill',
      'state' => 'NC',
      'country' => 'United States',
      'description' => 'Sometimes the is a fire in the world and we have to get it out',
			'password' => Hash::make('password')
		));
	}

}
