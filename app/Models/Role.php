<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = ['nama'];
    public $timestamps = false;

    public const admin = 1;
    public const dudi = 2;
    public const siswa = 3;
    public const guru = 4;
    public const ortu = 5;

    public function users(){
        return $this->hasMany(User::class);
    }
}
