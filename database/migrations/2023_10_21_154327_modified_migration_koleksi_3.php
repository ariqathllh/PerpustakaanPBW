<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Nama     : Ariq Athallah
     * NIM      : 6706223116
     * Kelas    : 4603
     */
    public function up(): void
    {
        Schema::table('koleksi', function (Blueprint $table) {
            $table->integer('jumlahKeluar');
            $table->integer('jumlahSisa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('koleksi', function (Blueprint $table) {
            //
        });
    }
};