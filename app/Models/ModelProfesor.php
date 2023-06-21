<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelProfesor extends Model
{
    protected $table = 'profesor';
    protected $primaryKey = 'cod_profesor';
    public $timestamps = true;
}
