<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
class Jurusan extends Model
{
    use HasFactory;
    use HasUuids;
    protected $guarded = ['id'];
    // public function kesediaan(){
    //     return $this->hasMany(Kompetensi::class);
    // }

        
    public function kesediaans(){
        return $this->belongsToMany(Kesediaan::class, 'jurusan_kesediaan', 'jurusan_id', 'kesediaan_id')->withPivot('jumlah');
    }
}
