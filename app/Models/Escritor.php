<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escritor extends Model
{
    use HasFactory;

    //Un escritor tiene varios libros
    function libro()
    {
        return $this->belongsToMany(Libro::class);
    }
}
