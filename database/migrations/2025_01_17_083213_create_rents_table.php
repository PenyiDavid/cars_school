<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rents', function (Blueprint $table) {
            $table->id();
            $table->string('email', 45)->nullable();
            $table->unsignedBigInteger('car_id')->nullable();
            $table->date('rent_start')->nullable();
            $table->date('rent_end')->nullable();
            $table->integer('km')->nullable();
            $table->integer('all_price')->nullable();
            $table->timestamps();


            $table->foreign('car_id')
                ->references('id')
                ->on('cars');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rents');
    }
};
