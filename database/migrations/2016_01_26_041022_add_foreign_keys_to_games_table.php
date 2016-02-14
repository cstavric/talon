<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToGamesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('games', function(Blueprint $table)
		{
			$table->foreign('sport_id', 'games_ibfk_1')->references('id')->on('sports')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('level_id', 'games_ibfk_2')->references('id')->on('levels')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('opponents_id', 'games_ibfk_3')->references('id')->on('schools')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('locations_id', 'games_ibfk_4')->references('id')->on('locations')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('games', function(Blueprint $table)
		{
			$table->dropForeign('games_ibfk_1');
			$table->dropForeign('games_ibfk_2');
			$table->dropForeign('games_ibfk_3');
			$table->dropForeign('games_ibfk_4');
		});
	}

}
