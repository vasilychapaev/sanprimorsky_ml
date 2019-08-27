<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->integer('adult_cnt')->nullable()->default(0);
            $table->integer('child_cnt')->nullable()->default(0);
            $table->integer('hotel_id')->nullable()->default(0);
            $table->string('hotel_name')->nullable()->default('');
            $table->integer('room_id')->nullable()->default(0);
            $table->string('room_name')->nullable()->default('');
            $table->date('date_from')->nullable();
            $table->date('date_to')->nullable();
            $table->string('fio')->nullable()->default('');
            $table->string('phone')->nullable()->default('');
            $table->string('email')->nullable()->default('');
            $table->float('sum')->nullable()->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
