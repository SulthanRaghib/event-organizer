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
        Schema::create('event', function (Blueprint $table) {
            $table->id('id_event');
            $table->string('judul_event');
            $table->string('pembicara');
            $table->date('tanggal_event');
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->string('tempat_event');
            $table->string('deskripsi_event');
            $table->string('status_event');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event');
    }
};
