<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCustomDesign extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('accounts', function($table)
        {
            $table->text('custom_design')->nullable();
        });

        DB::table('invoice_designs')->insert(['id' => CUSTOM_DESIGN, 'name' => 'Custom']);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('accounts', function($table)
        {
            $table->dropColumn('custom_design');
        });
	}

}
