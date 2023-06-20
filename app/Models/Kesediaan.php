<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Kesediaan extends Model
{
    use HasFactory;
    use HasUuids;
    protected $guarded = ['id'];
    // protected $fillable = ['jurusan_id', 'jumlah', 'status'];



    public function dudi(){
        return $this->belongsTo(User::class, 'user_id_dudi');
    }
    public function jurusans(){
        return $this->belongsToMany(Jurusan::class, 'kompetensis', 'kesediaan_id', 'jurusan_id')->withPivot('jumlah');
    }

}
