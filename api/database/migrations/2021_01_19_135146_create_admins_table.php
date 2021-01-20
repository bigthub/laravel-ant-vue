<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('admins', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->boolean('state')->default(1);
			$table->string('name', 30)->index();
			$table->string('email');
			$table->string('cellphone', 11);
			$table->string('password');
			$table->string('portrait');
			$table->dateTime('time')->nullable();
			$table->dateTime('last_login_at')->nullable();
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
		Schema::drop('admins');
	}
}
