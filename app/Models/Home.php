<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
    protected $table = 'homes';

    protected $fillable = [
        'empresa',
        'telefono',
        'correo',
        'ubicacion',
        'horario',
        'facebook',
        'twiter',
        'instagram',
        'youtube',
        'banners',
        'banners_mobil'

    ];
}
