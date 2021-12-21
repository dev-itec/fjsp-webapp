<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommercesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commerces', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('rut', 10);
            $table->string('address', 100);
            $table->string('description', 100);
            $table->string('fb_page', 100)->nullable();
            $table->string('tw_profile', 100)->nullable();
            $table->string('ig_profile', 100)->nullable();
            $table->string('ws_number', 100);
            $table->string('web_page', 100)->nullable();
            $table->string('logo', 100)->nullable();
            $table->string('email', 100);
            $table->string('secret', 100);
            $table->boolean('is_active')->default(true);
            $table->unsignedBigInteger('created_by');
            $table->foreign('created_by')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commerces');
    }
}
