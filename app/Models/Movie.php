<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{

    // Kolom yang dapat diisi secara massal
    protected $fillable = [
        'title',
        'director',
        'description',
        'release_year',
    ];
}
