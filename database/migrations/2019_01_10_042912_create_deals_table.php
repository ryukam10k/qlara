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
            $table->integer('customer_id');
            $table->integer('deal_category_id');
            $table->integer('account_id');
            $table->string('tag');
            $table->integer('price');
            $table->integer('number');
            $table->string('memo');
            $table->dateTime('reception_date');
            $table->dateTime('end_date');
            $table->string('keijo_tsuki');
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
