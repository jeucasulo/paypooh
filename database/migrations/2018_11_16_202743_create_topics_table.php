<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('info');
            $table->string('status');
            $table->string('active');
            $table->integer('platform_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('platform_id')->references('id')->on('platforms')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();

            // $table->integer('permission_id')->unsigned();
            // $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('topics');
    }
}
