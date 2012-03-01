<?php

class Admin_Insert_Default_Admin {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('admin')->insert(array(
			'username'  => 'Jason',
			'password'  => '$2a$08$OW1BTm9UcnBHQkk4RUt0VuGvjXjla2NPqNsNqVk53pW2/2jRlJ/QO',
			'real_name' => 'Jason Lewis'
		));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('admin')->where('username', '=', 'Jason')->delete();
	}

}