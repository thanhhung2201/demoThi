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
        Schema::create('flights', function (Blueprint $table) {
            $table->string('SoHieuChuyenBay')->primary();
            $table->string('SanBayKhoiHanh');
            $table->string('SanBayDen');
            $table->string('NgayGioKhoiHanh');
            $table->string('NgayGioDen');
            $table->string('SoDangKy');
            $table->foreign('SoDangKy')->references('SoDangKy')->on('planes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
