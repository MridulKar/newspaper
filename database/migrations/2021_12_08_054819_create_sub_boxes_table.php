<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubBoxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_boxes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('box_id');
            $table->string('slug');
            $table->string('image')->nullable();
            $table->string('title');
            $table->longText('description');
            $table->string('author');
            $table->string('date');
            $table->string('banner_image')->nullable();
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
        Schema::dropIfExists('sub_boxes');
    }
}
