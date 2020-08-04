<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoPrecio;

class TipoPrecioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $TipoPrecio['precios']=TipoPrecio::paginate(5);
     return view('vistasAdmin/TablaPrecio',$TipoPrecio);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('vistasAdmin/TipodePrecio');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $datosTipoPrecio=request()->except('_token');
            TipoPrecio::insert($datosTipoPrecio);
        return response()->json($datosTipoPrecio);
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
    public function destroy($id_tipoPrecio)
    {
        TipoPrecio::destroy($id_tipoPrecio);
           return view('vistasAdmin/TablaPrecio');
    }
}
