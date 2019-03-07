<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id')->nullable();
            $table->integer('deal_category_id')->nullable();
            $table->integer('account_id')->nullable();
            $table->string('tag')->nullable();
            $table->integer('price')->nullable();
            $table->integer('number')->nullable();
            $table->string('memo')->nullable();
            $table->dateTime('reception_date')->nullable();
            $table->dateTime('end_date')->nullable();
            $table->string('keijo_tsuki')->nullable();
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
        Schema::dropIfExists('deals');
    }
}
