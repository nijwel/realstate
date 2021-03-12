<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMissionVissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mission_vissions', function (Blueprint $table) {
            $table->id();
            $table->string('title_1');
            $table->string('image_1');
            $table->text('details_1');
            $table->string('title_2');
            $table->string('image_2');
            $table->text('details_2');
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
        Schema::dropIfExists('mission_vissions');
    }
}
