<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mecanico extends Model
{
    protected $table = 'mecanicos';
    protected $primaryKey = 'id_mecanico';
    protected $fillable = ['nombrem'];
}