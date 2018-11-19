<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Cancion;
use App\Vocalista;

class CancionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $cancion=Cancion::all();
      return view('music.cancion.index',compact('cancion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $album=Album::all();
      $vocalista=Vocalista::all();
      return view('music.cancion.create',compact('album','vocalista'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $cancion = new Cancion;
      $cancion->titulo = $request->get('titulo');
      $cancion->numpista = $request->get('numpista');
      $cancion->duracion = $request->get('duracion');
      $cancion->fecha = $request->get('fecha');
      $cancion->album_id = $request->get('album_id');
      $cancion->save();

      $vocalista = $request->vocalista_id;
      //dd($category);
      $cancion->vocalist()->attach($vocalista);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
