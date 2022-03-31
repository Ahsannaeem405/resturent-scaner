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
        Schema::create('location_infos', function (Blueprint $table) {
            $table->id();
            $table->text("name")->nullable();
            $table->text("address")->nullable();
            $table->text("street")->nullable();
            $table->text("house_no")->nullable();
            $table->text("zip")->nullable();
            $table->text("phone_no")->nullable();
            $table->text("site_logo")->nullable();
            $table->text("playsound")->nullable();
            $table->text("message")->nullable();
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
        Schema::dropIfExists('location_infos');
    }
};
