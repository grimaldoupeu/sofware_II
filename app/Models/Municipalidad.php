<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Municipalidad extends Model
{
    protected $table = 'municipalidades';
    protected $fillable = [ 
    'nombre', 
    'titulo', 
    'descripcion',
    'redes_url',
    'red_facebook',
    'red_twitter',
    'red_whatsapp',
    'coordenadas_x',
    'coordenadas_y',];
}