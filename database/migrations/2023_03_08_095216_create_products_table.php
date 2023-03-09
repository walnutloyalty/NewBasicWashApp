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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('_id')->unique();
            $table->string('storeId');
            $table->string('name');
            $table->longText('description');
            $table->longText('image')->nullable();
            $table->decimal('price', 10, 2)->default(0.00);
            $table->integer('btw');
            $table->string('interval')->default('maand');
            $table->boolean('availability_duration')->default(false);
            $table->dateTime('available_from')->nullable();
            $table->dateTime('available_until')->nullable();
            $table->boolean('zakelijk')->default(false);
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
        Schema::dropIfExists('products');
    }
};
