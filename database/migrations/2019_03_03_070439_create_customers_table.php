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
            $table->string('group_name')->nullable();
            $table->string('company_name')->nullable();
            $table->string('transfer_name')->nullable();
            $table->string('memo')->nullable();
            $table->boolean('delete_flag');
            $table->integer('closing_date')->nullable();
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
