<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kompetensis', function (Blueprint $table) {

            $table->foreignUuid('kesediaan_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignUuid('jurusan_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->integer('jumlah');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kompetensis');
    }
};
