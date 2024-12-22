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
        Schema::create('kriteria_komputers', function (Blueprint $table) {
            $table->id();
            $table->string('c1_processor', 100);
            $table->string('c2_ram', 100);
            $table->string('c3_penyimpanan', 100);
            $table->string('c4_motherboard', 100);
            $table->string('c5_merk', 100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kriteria_komputers');
    }
};
