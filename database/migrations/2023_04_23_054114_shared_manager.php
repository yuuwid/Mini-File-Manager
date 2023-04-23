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
        Schema::create('shared_manager', function (Blueprint $table) {
            $table->unsignedBigInteger('id_user')->unsigned()->nullable();
            $table->unsignedBigInteger('id_manager')->unsigned()->nullable();
            $table->unsignedBigInteger('id_role')->unsigned()->nullable();

            $table->foreign('id_user')->references('id_user')->on('users')->nullOnDelete();
            $table->foreign('id_manager')->references('id_manager')->on('managers')->nullOnDelete();
            $table->foreign('id_role')->references('id_role')->on('roles')->nullOnDelete();

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
        Schema::dropIfExists('shared_manager');
    }
};
