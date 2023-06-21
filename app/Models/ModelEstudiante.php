<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelEstudiante extends Model
{
    protected $table = 'estudiante';
    protected $primaryKey = 'cod_estudiante';
    public $timestamps = true;
}
