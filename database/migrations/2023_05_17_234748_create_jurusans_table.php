<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jurusans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->timestamps();
        });

        DB::table('jurusans')->insert(
            [
                ['nama' => 'Rekayasa Perangkat Lunak'],
                ['nama' => 'Teknik Komputer dan Jaringan'], 
                ['nama' => 'Multimedia'], 
                ['nama' => 'Kimia Industri'],
            ]
                
            );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jurusans');
    }
};
