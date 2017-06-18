<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use DB;
use Carbon\Carbon;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->string('name', 30);
            $table->string('description', 255);
            $table->integer('price');
            $table->string('category', 50)->nullable();
            $table->string('image', 255);
            $table->integer('times')->default(0);
            $table->timestamp('created_at')->default(Carbon::now());
            $table->timestamp('updated_at')->default(Carbon::now());
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
