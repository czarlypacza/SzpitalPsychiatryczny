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
        if(!Schema::hasTable('doctors')){
            Schema::create('doctors', function (Blueprint $table) {
                $table->id();
                $table->string('first_name',30);
                $table->string('last_name',40);
                $table->string('specialization',150)->nullable();
                $table->string('phone_number',15)->nullable();
                $table->bigInteger('ward_id')->nullable();
                $table->foreign('ward_id')->references('id')->on('wards')->onDelete('cascade')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
