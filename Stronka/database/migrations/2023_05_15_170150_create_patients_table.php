<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use App\Models\Doctor;
use App\Models\Address;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if(!Schema::hasTable('patients')){
            Schema::create('patients', function (Blueprint $table) {
                $table->id();
                $table->string('first_name',30);
                $table->string('last_name',40);
                $table->Integer('age')->nullable();
                $table->string('phone_number',15)->nullable();
                $table->bigInteger('pesel')->nullable();
                $table->smallInteger('weight')->nullable();
                $table->smallInteger('height')->nullable();
                $table->foreignIdFor(Doctor::class)->constrained()->onDelete('cascade')->nullable();
                $table->foreignIdFor(Address::class)->constrained()->onDelete('cascade')->nullable();
                // $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
