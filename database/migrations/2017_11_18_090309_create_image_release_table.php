<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageReleaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_release', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('image_id');
            $table->unsignedInteger('release_id');

            $table->foreign('image_id')->references('id')->on('images');
            $table->foreign('release_id')->references('id')->on('releases');

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
        Schema::dropIfExists('image_release');
    }
}
