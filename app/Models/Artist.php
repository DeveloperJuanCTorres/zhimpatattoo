<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;
    protected $table = 'artists';

    protected $fillable = [
        'name',
        'description',
        'signature',
        'image',
        'slug',
        'status',
        'artes'

    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
