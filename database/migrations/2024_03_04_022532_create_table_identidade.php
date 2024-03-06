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
        Schema::create('identidade', function (Blueprint $table) {
            $table->id();
            $table->string('naran')->nullable(false);
            $table->bigInteger('tinan')->nullable(false);
            $table->string('hela_fatin')->nullable(false);
            $table->enum('sexo', ['Mane', 'Feto'])->default('Mane');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('identidade');
    }
};
