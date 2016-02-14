<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSchoolsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('schools', function(Blueprint $table)
		{
			$table->foreign('league_id', 'schools_ibfk_1')->references('id')->on('leagues')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('division_id', 'schools_ibfk_2')->references('id')->on('divisions')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('district_id', 'schools_ibfk_3')->references('id')->on('districts')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('schools', function(Blueprint $table)
		{
			$table->dropForeign('schools_ibfk_1');
			$table->dropForeign('schools_ibfk_2');
			$table->dropForeign('schools_ibfk_3');
		});
	}

}
