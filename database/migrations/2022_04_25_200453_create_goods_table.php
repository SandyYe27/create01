<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('img_path')->nullable()->comment('圖片路徑');
            $table->string('product_name')->nullable()->comment('品名');
            $table->string('product_price')->nullable()->comment('價格');
            $table->integer('product_amount')->nullable()->comment('數量');
            $table->string('product_description')->nullable()->comment('介紹');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('goods');
    }
};
