<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurnal extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

       
    public function kesediaans(){
        return $this->belongsToMany(Kesediaan::class, 'kompetensis', 'jurusan_id', 'kesediaan_id')->withPivot('jumlah');
    }
    public function images() 
    {
        return $this->hasMany(Image::class);
    }

    public function plotingans(){
        return $this->belongsTo(Plotingan::class, 'plotingan_id');
    }

    public function siswa()
    {
        return $this->belongsTo(User::class, 'user_id_siswa');
    }

    public function ortu(){
        return $this->hasOne(Ortu::class, 'user_id_siswa', 'user_id_siswa');
    }
}
