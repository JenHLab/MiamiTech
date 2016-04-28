<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCoordinatesToAcin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('acin', function (Blueprint $table) {
            $table->decimal('latitude', 10, 8);
            $table->decimal('longitude', 11, 8);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('acin', function (Blueprint $table) {
            $table->dropColumn('latitude', 'longitude');
        });
    }
}
