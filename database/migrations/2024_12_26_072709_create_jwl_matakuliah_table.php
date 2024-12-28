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
        Schema::create('jwl_matakuliah', function (Blueprint $table) {
            $table->id();
            $table->string('matakuliah', 250)->required();
            $table->integer('sks')->required();
            $table->string('kelp', 50)->required();
            $table->string('ruangan', 50)->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jwl_matakuliah');
    }
};
