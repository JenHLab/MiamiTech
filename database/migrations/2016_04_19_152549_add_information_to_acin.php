<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInformationToAcin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('acin', function (Blueprint $table) {
            //$table->increments('id');
            $table->string('about', 300);
            $table->string('website', 300);
            $table->string('address', 300);
            $table->string('contact', 300);
            //$table->timestamps();
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
            $table->dropColumn('about', 'website', 'address', 'contact');
        });
    }
}
