<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsCityTelGeneral extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //ENT
        Schema::table('commerces', function ($table) {
            $table->string('city', 100)->nullable();
            $table->string('tel',100)->nullable();
        });

        //NGOS
        Schema::table('ngos', function ($table) {
            $table->string('city', 10)->nullable();
            $table->string('tel',100)->nullable();
        });

        //CASES
        Schema::table('cases', function ($table) {
            $table->string('city', 10)->nullable();
            $table->string('tel',100)->nullable();
        });

        //EVENTS
        Schema::table('events', function ($table) {

            $table->string('city')->nullable();
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
