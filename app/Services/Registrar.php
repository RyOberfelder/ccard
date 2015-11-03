<?php namespace App\Services;

use App\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'fname' => 'required|max:255',
			'lname' => 'required|max:255',
			'uname' => 'required|max:255',
			'city' => 'required|max:255',
			'state' => 'required|max:255',
			'country' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:6',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		return User::create([
			'fname' => $data['fname'],
			'lname' => $data['lname'],
			'uname' => $data['uname'],
			'email' => $data['email'],
			'city' => $data['city'],
			'state' => $data['state'],
			'country' => $data['country'],
			'description' => $data['description'],
			'password' => bcrypt($data['password']),
		]);
	}

}
