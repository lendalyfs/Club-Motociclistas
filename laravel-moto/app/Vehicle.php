<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
  use Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'id', 'placa', 'marca_linea', 'modelo', 'no_sancion', 'no_motor',
      'clave_vehicular', 'date_expedition', 'vigencia',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
      
  ];
}
