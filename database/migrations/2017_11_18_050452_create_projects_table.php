<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug');
            $table->string('title');
            $table->enum('status', ['planned', 'on-going', 'pending', 'dropped', 'completed']);
            $table->text('description');
            $table->enum('type', ['cartoon', 'mv']);
            $table->text('note')->nullable();

            $table->unsignedInteger('created_by');
            $table->unsignedInteger('join_with');

            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('join_with')->references('id')->on('partners');

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
        Schema::dropIfExists('projects');
    }
}
