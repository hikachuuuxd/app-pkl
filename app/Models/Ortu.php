<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ortu extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = ['user_id_ortu', 'user_id_siswa'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
