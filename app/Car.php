<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
  public $timestamps = false;

  protected $fillable = ['name', 'model', 'year', 'kilometers', 'colour'];
}
