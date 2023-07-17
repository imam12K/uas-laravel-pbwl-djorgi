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
        Schema::create('tb_headphone', function (Blueprint $table) {
            $table->increments('headphone_id');
            $table->string('headphone_id_jenisheadphone');
            $table->string('headphone_nama');
            $table->string('headphone_harga');
            $table->string('headphone_stock');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_headphone');
    }
};
