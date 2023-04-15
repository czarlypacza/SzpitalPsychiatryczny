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
        if(!Schema::hasTable('illnesses')){
            Schema::create('illnesses', function (Blueprint $table) {
                $table->id();
                //$table->timestamps();
                $table->string('name',60)->nullable(false);
                $table->string('description',150)->nullable(true);
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('illnesses');
    }
};
