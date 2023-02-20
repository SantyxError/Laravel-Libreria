<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;


    //Un libro pertenece a un Escritor
    function escritor()
    {
        return  $this->belongsTo(Escritor::class);
    }

    // Un libro pertenece a una editorial

    function editorial()
    {
        return $this->belongsTo(Editorial::class);
    }
}
