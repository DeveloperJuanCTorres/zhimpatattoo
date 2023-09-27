<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
    use HasFactory;
    protected $table = 'studios';

    protected $fillable = [
        'subtitulo',
        'titulo',
        'mision',
        'vision',
        'inspiracion',
        'link_video',
        'imagen',
        'description'

    ];
}
