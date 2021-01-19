<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthRulesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('auth_rules', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('api', 200)->comment('对应前端的模板名');
			$table->string('url')->nullable()->comment('外链地址');
			$table->string('icon', 20)->nullable()->comment('菜单小图标');
			$table->string('title', 30)->comment('权限名称');
			$table->integer('pid')->comment('分组');
			$table->boolean('state')->default(0)->comment('是否显示在菜单栏，顶级类目不受此约束；1为显示0为隐藏');
			$table->integer('sort')->default(0)->comment('排序：同级有效');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('auth_rules');
	}
}
