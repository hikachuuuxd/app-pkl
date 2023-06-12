<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plotingan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // protected $fillable = [
    //     'tanggal', 
    //     'kesediaan_id', 
    //     'user_id_guru'
    // ];
    public function guru()
    {
        return $this->belongsTo(User::class, 'user_id_guru');
    }
    public function kesediaan()
    {
        return $this->belongsTo(kesediaan::class, 'kesediaan_id');
    }

    
    public function siswas(){
        return $this->belongsToMany(User::class, 'bimbingans', 'plotingan_id', 'user_id_siswa');
    }


    // protected static function booted()
    // {
    //     static::updated(function ($plotingan) {
    //         $kesediaan = Kesediaan::find($plotingan->kesediaan_id);
    //         $kesediaan->update([
    //             'status' => 1
    //         ]);

    //     });
    // }
   

}
