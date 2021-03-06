<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinkReleaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('link_release', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('link_id');
            $table->unsignedInteger('release_id');

            $table->foreign('link_id')->references('id')->on('links');
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
        Schema::dropIfExists('link_release');
    }
}
