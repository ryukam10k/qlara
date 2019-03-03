<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customer_name');
            $table->string('customer_short_name');
            $table->string('group_name');
            $table->string('company_name');
            $table->string('transfer_name');
            $table->string('memo');
            $table->boolean('delete_flag');
            $table->dateTime('closing_date');
            $table->boolean('tax_with_holding_flag');
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
        Schema::dropIfExists('customers');
    }
}
