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
        Schema::create('keahlian_pengacaras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pengacara_id')->constrained()->cascadeOnDelete();
            $table->foreignId('keahlian_id')->constrained()->cascadeOnDelete();
            $table->boolean('is_verified')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keahlian_pengacaras');
    }
};
