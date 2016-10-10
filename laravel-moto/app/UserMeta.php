<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMeta extends Model
{
  use Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'id', 'first_name', 'middle_name', 'last_name', 'birthdate', 'emergency_phone',
      'emergency_phone_optional', 'blood_type', 'street', 'colonia', 'cp',
      'delegacion_municipio', 'state', 'experiencia', 'nss',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
      
  ];
}
