<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_orders', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('pizza_id');
            $table->text('body')->nullable();
            $table->string('date');
            $table->string('time');
            $table->string('samll_pizza')->default(0);
            $table->string('meduim_pizza')->default(0);
            $table->string('big_pizza')->default(0);
            $table->string('status')->default('pending');
            $table->string('phone');
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
        Schema::dropIfExists('user_orders');
    }
}
