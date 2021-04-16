<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnvironmentsImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('environments_images', function (Blueprint $table) {
            $table->id('id_envrironment_image');
            $table->string('image_description');
            $table->string('image_url');

            $table->foreignId('environment_id')->references('id_environment')->on('environments')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('environments_images');
    }
}
