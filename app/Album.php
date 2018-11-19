<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
  protected $table='album';
  protected $primaryKey='id';
  public $timestamps=false;
  protected $fillable =[
    'nombre',
    'fecha',
    'duracion',
    'artista_id'
  ];
  protected $guarded =[
  ];
}
