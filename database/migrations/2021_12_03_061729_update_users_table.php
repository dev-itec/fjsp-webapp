<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('last_name')->nullable();
            $table->integer('created_by')->nullable()->unsigned();
            $table->integer('modified_by')->nullable()->unsigned();

            $table->index('email');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
        $table->dropIndex(['username']);
        $table->dropIndex(['email']);

        if (Schema::hasColumn('users', 'last_name')) {
            $table->dropColumn('last_name');
        }

        if (Schema::hasColumn('users', 'username')) {
            $table->dropColumn('username');
        }

        if (Schema::hasColumn('users', 'created_by')) {
            $table->dropColumn('created_by');
        }

        if (Schema::hasColumn('users', 'modified_by')) {
            $table->dropColumn('modified_by');
        }
        });
    }
}
