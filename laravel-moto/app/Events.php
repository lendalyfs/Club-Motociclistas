<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
  use Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'id', 'origen', 'destino', 'fecha_salida', 'fecha_regreso', 'descripcion',
      'foto',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [

  ];
}
