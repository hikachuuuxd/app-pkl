<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bimbingan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = [
        'plotingan_id',
        'user_id_siswa', 
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'user_id_siswa', 'user_id_siswa');
    }

}
