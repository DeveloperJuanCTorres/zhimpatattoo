<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';

    protected $fillable = [
        'artista_id',
        'proyecto_name',
        'proyecto_img',
        'video_link',
        'slug'

    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }    
}
