<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
  protected $table='artista';
  protected $primaryKey='id';
  public $timestamps=false;
  protected $fillable =[
    'nombre'    
  ];
  protected $guarded =[
  ];
}
