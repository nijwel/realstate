<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stories', function (Blueprint $table) {
            $table->id();
            $table->string('title_1');
            $table->string('image_1');
            $table->text('details_1');
            $table->string('title_2');
            $table->string('image_2');
            $table->text('details_2');
            $table->string('title_3');
            $table->string('image_3');
            $table->text('details_3');
            $table->string('title_4');
            $table->string('image_4');
            $table->text('details_4');
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
        Schema::dropIfExists('stories');
    }
}
