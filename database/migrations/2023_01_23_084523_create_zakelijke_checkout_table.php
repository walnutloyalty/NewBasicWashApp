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
        Schema::create('zakelijke_checkout', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('postalCode_private')->nullable();
            $table->string('houseNumber_private')->nullable();
            $table->string('companyName')->nullable();
            $table->string('fin')->nullable();
            $table->string('kvk')->nullable();
            $table->string('street_business')->nullable();
            $table->string('houseNumber_business')->nullable();
            $table->string('postalCode_business')->nullable();
            $table->string('city_business')->nullable();
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
        Schema::dropIfExists('zakelijke_checkout');
    }
};
