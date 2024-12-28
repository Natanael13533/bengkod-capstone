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
        Schema::create('inputmhs', function (Blueprint $table) {
            $table->id();
            $table->string('namaMhs', 255)->required();
            $table->string('nim', 15)->required();
            $table->float('ipk')->required();
            $table->integer('sks')->required();
            $table->text('matakuliah')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inputmhs');
    }
};
