<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Patient;
use App\Models\Illness;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if(!Schema::hasTable('illness_patient')){
            Schema::create('illness_patient', function (Blueprint $table) {
                $table->foreignIdFor(Patient::class)->constrained()->onDelete('cascade');;
                $table->foreignIdFor(Illness::class)->constrained()->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('illness_patient');
    }
};
