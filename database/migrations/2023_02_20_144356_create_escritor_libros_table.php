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
        Schema::create('escritor_libros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('escritor_id')->unsigned();
            $table->unsignedBigInteger('libro_id')->unsigned();
            $table->timestamps();
            $table->foreign('escritor_id')->references('id')->on('escritores');
            $table->foreign('libro_id')->references('id')->on('libros');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('escritor_libros');
    }
};
