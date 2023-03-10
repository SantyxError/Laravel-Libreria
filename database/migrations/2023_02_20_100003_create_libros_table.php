<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->integer('anyo');
            $table->unsignedBigInteger('escritor_id')->unsigned();
            $table->unsignedBigInteger('editorial_id')->unsigned();
            $table->foreign('escritor_id')->references('id')->on('escritors');
            $table->foreign('editorial_id')->references('id')->on('editorials');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
