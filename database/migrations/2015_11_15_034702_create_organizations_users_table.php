<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationsUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('organizations_users', function(Blueprint $table)
		{
			$table->integer('organization_id')->unsigned();
      $table->integer('user_id')->unsigned();

      $table->foreign('user_id')->references('id')->on('users');
      $table->foreign('organization_id')->references('id')->on('organizations');

      $table->primary(array('user_id', 'organization_id'));
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
		Schema::drop('organizations_users');
	}

}
