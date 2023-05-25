<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kesediaan extends Model
{
    use HasFactory;
    protected $guraded = ['id'];

    public function kompetensis(){
        return $this->hasMany(Kompetensi::class);
    }

    public function dudi(){
        return $this->belongsTo(User::class, 'user_id_dudi');
    }
}
