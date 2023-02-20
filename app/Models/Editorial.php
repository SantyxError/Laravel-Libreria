<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    use HasFactory;

    //Una editorial tiene varios libros
    function libro()
    {
        return $this->belongsToMany(Libro::class);
    }
}
