<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $table = 'agenda';
    protected $primaryKey = 'id_reserva';
    protected $fillable = ['hora','mecanico','sucursal','fecha','correo','nombrec'];
}