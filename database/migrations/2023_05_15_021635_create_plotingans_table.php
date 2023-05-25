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
        Schema::create('plotingans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kesediaan_id')->unique()->references('id')->on('kesediaans')->constrained();
            $table->integer('user_id_guru')->unique();
            $table->date('tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plotingans');
    }
};
