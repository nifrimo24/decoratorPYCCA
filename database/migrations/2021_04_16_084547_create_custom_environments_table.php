<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomEnvironmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custom_environments', function (Blueprint $table) {
            $table->string('custom_environment_image');

            $table->foreignId('environment_id')->references('id_environment')->on('environments')->unsigned();
            $table->foreignId('product_id')->references('id_product')->on('products')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('custom_environments');
    }
}
