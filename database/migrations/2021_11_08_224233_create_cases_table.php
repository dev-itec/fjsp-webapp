<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cases', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('description', 500);
            $table->unsignedBigInteger('ngo_id');
            $table->foreign('ngo_id')->references('id')->on('ngos')->onDelete('cascade');
            $table->unsignedBigInteger('taked_by');
            $table->foreign('taked_by')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('closed_by');
            $table->foreign('closed_by')->references('id')->on('users')->onDelete('cascade');
            $table->boolean('status')->default(0);
            $table->date('date_expired');
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
        Schema::dropIfExists('cases');
    }
}
