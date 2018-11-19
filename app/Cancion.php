<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Vocalista;

class Cancion extends Model
{
  protected $table='cancion';
  protected $primaryKey='id';
  public $timestamps=false;
  protected $fillable =[
    'titulo',
    'numpista',
    'duracion',
    'fecha',
    'album_id'
  ];
  protected $guarded =[
  ];

  public function vocalist()
  {
      return $this->belongsToMany(Vocalista::class);
  }

}
