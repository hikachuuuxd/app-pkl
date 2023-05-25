<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plotingan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function guru()
    {
        return $this->belongsTo(User::class, 'user_id_guru');
    }
    public function kesediaan()
    {
        return $this->belongsTo(kesediaan::class, 'kesediaan_id');
    }

    public function siswas()
    {
        return $this->hasMany(Bimbingan::class);
    }


   

}
