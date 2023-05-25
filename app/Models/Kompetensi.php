<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kompetensi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = [
        'kesediaan_id',
        'jurusan',
        'jumlah'
    ];

    // public function kesediaans()
    // {
    //     return $this->belongsToMany(Kesediaan::class, 'kesediaan_kompetensis');
    // }
}
