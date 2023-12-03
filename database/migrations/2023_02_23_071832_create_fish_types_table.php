<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Migration untuk tabel fish_types
        Schema::create('fish_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price', 10, 2);
            $table->integer('ukuran_awal');
            $table->integer('waktu_panen');
            $table->integer('ukuran_panen');
            $table->integer('stocking_density');
            $table->decimal('fcr', 4, 2);
            $table->timestamps();
        });

    }

    public function down()
    {
        // Drop tabel fish_types dan feeds
        Schema::dropIfExists('fish_types');
        Schema::dropIfExists('feeds');
    }
};
