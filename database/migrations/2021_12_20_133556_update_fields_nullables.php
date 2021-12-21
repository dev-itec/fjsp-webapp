<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateFieldsNullables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //ENT
        Schema::table('commerces', function (Blueprint $table) {
            $table->string('rut', 10)->nullable()->change();
            $table->string('ws_number', 100)->nullable()->change();
            $table->boolean('is_active')->default(1)->change();
        });

        //NGOS
        Schema::table('ngos', function (Blueprint $table) {
            $table->string('rut',10)->nullable()->change();
            $table->string('ws_number',100)->nullable()->change();
            $table->string('web_page',100)->nullable()->change();
            $table->boolean('is_active')->default(1)->change();
        });

        //EVENTS
        Schema::table('events', function ($table) {

            $table->string('location')->nullable()->change();
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
