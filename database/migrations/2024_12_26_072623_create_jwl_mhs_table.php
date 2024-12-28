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
        Schema::create('jwl_mhs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mhs_id')->required();
            $table->string('matakuliah', 255)->required();
            $table->integer('sks')->required();
            $table->string('kelp', 50)->required();
            $table->string('ruangan', 50)->required();
            $table->timestamps();

            $table->foreign('mhs_id')->references('id')->on('inputmhs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jwl_mhs');
    }
};
