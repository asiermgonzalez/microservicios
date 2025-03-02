<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CitaTaller extends Model
{
    use HasFactory;

    protected $table = "citas_taller";

    protected $fillable = [
        'marca_vehiculo_id',
        'title',
    ];
}
