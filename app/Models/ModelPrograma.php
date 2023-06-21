<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelPrograma extends Model
{
    protected $table = 'programa';
    protected $primaryKey = 'cod_programa';
    public $timestamps = true;
}
