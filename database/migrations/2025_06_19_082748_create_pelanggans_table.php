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
        // migrations/create_pelanggans_table.php
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->string('idPelanggan')->primary();
            $table->string('namaPelanggan', 100);
            $table->string('alamatPelanggan', 100);
            $table->string('noHp', 20);
            $table->string('email', 100);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelanggans');
    }
};
