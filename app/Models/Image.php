<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = ['jurnal_id', 'image'];

    // public function jurnals() 
    // {
    //     return $this->belongsToMany(Image::class, 'image_jurnals', 'image_id', 'jurnal_id');
    // }
}
