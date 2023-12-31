<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;
    protected $table = 'positions';

    protected $fillable = [
        'banner_img',
        'artes',
        'artista_name',
        'artista_description',
        'artista_img',
        'image',
        'slug',
        'posicion'

    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
}
