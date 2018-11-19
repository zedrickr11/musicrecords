<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vocalista;

class VocalistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $vocalista=Vocalista::all();
      return view('music.vocalista.index',compact('vocalista'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('music.vocalista.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Vocalista::create($request->all());
      return redirect()->route('vocalista.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $vocalista=Vocalista::findOrFail($id);
      return view('music.vocalista.show', compact('vocalista'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $vocalista=Vocalista::findOrFail($id);
      return view('music.vocalista.edit', compact('vocalista'));
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
      Vocalista::findOrFail($id)->update($request->all());
      return redirect()->route('vocalista.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Vocalista::findOrFail($id)->delete();
      return redirect()->route('vocalista.index');
    }
}
