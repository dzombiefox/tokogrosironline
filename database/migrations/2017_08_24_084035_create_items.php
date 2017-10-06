<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('item_code',100)->nullable();
            $table->string('item_name',100)->nullable();
            $table->string('notes',100)->nullable();
            $table->integer('detailcategorys_id')->nullable();
            $table->string('images')->nullable();
            $table->string('imagesback')->nullable();
            $table->integer('brands_id')->nullable();
            $table->integer('positions_id')->nullable();
            $table->string('descriptions')->nullable();
            $table->string('informations')->nullable();
            $table->integer('statusimages_id')->nullable();
            $table->float('price',12)->nullable();
            $table->float('priceold')->nullable();
            $table->string('minimumorder')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
