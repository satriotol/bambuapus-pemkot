<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_reports', function (Blueprint $table) {
            $table->string('gender')->nullable();
            $table->date('birth')->nullable();
            $table->string('birthplace')->nullable();
            $table->string('parent')->nullable();
            $table->string('phone')->nullable();
            $table->string('nik')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_reports', function (Blueprint $table) {
            $table->dropColumn('gender');
            $table->dropColumn('birth');
            $table->dropColumn('birthplace');
            $table->dropColumn('parent');
            $table->dropColumn('phone');
            $table->dropColumn('nik');
        });
    }
};
