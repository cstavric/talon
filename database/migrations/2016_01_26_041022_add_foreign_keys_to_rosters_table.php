<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRostersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('rosters', function(Blueprint $table)
		{
			$table->foreign('sport_id', 'rosters_ibfk_1')->references('id')->on('sports')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('level_id', 'rosters_ibfk_2')->references('id')->on('levels')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('year_id', 'rosters_ibfk_3')->references('id')->on('years')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('rosters', function(Blueprint $table)
		{
			$table->dropForeign('rosters_ibfk_1');
			$table->dropForeign('rosters_ibfk_2');
			$table->dropForeign('rosters_ibfk_3');
		});
	}

}
