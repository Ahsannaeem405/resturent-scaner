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
        Schema::create('order_pickups', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('order_no')->nullable();
            $table->text('order_date')->nullable();
            $table->string('vehicle_color')->nullable();
            $table->string('vehicle_type')->nullable();
            $table->string('parking')->nullable();
            $table->string('order_detail')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('order_pickups');
    }
};
