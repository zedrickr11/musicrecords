<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cancion;

class Vocalista extends Model
{
  protected $table='vocalista';
  protected $primaryKey='id';
  public $timestamps=false;
  protected $fillable =[
    'nombre'

  ];
  protected $guarded =[
  ];
  public function cancions()
  {
      return $this->belongsToMany(Cancion::class);
  }
}
