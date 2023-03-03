<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parts', function (Blueprint $table) {
            $table->id();
            $table->longText('name');
            $table->longText('part_number');
            $table->string('image')->nullable();
            $table->double('china_price', 21, 2)->nullable();;
            $table->double('taiwan_price', 21, 2)->nullable();;
            $table->double('kyb_price', 21, 2)->nullable();;
            $table->double('japan_price', 21, 2)->nullable();
            $table->string('category');
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
        Schema::dropIfExists('parts');
    }
}
