<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rsvp extends Model
{
  use Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'id_user', 'id_event', 'status',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [

  ];
}
