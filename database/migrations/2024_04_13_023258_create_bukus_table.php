<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('judul')->unique();
            $table->string('nama');
            $table->string('kategori');
            $table->text('sinopsis');
            $table->text('isi');
            $table->integer('diunduh')->default(0);
            $table->text('noTlp');
            $table->unsignedBigInteger('harga')->nullable();
            $table->string('gambar')->unique();
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukus');
    }
};
