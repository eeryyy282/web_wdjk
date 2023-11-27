<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shoe extends Model
{
    use HasFactory;

    protected $fillable = [
        'merk',
        'tipe',
        'harga',
        'terjual',
        'rating',
        'foto',
    ];

    public function setFotoAttribute($foto)
    {
        if($foto) {
            // Menyimpan foto dengan nama yang unik
            $this->attributes['foto'] = $foto->storeAs('imgData', uniqid().'.'.$foto->extension());
        }
    }
}
