<?php

class Admin_Create_Admin_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('admin', function($table)
		{
			$table->increments('id');
			$table->string('username', 30);
			$table->string('password', 60);
			$table->string('real_name', 50);
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('admin');
	}

}