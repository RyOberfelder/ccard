<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConnectionsUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('connections_users', function(Blueprint $table)
		{
			$table->integer('connection_id')->unsigned();
      $table->integer('user_id')->unsigned();

      $table->foreign('user_id')->references('id')->on('users');
      $table->foreign('connection_id')->references('id')->on('users');

      $table->primary(array('user_id', 'connection_id'));
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('connections_users');
	}

}
