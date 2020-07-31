<?php

namespace App\Http\Controllers;
use DB;
 
use Illuminate\Http\Request;
use App\Modelo;
use App\TipoInmueble;

class ModeloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
         $Modelo ['modelos']=Modelo::paginate(5);
        return view('vistasAdmin/TablaModelo',$Modelo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $TipoInmuebles ['tipoInmuebles']=TipoInmueble::paginate(5);
        return view('vistasAdmin/Modelo',$TipoInmuebles);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosModelo=request()->except('_token');
        Modelo::insert($datosModelo);
        return response()->json($datosModelo);
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
    public function edit($Id_modelo)
    {
        $datosModelo = Modelo::findOrFail($Id_modelo);
        return view('vistasAdmin.Modelo', compact('datosModelo'));
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
    public function destroy($Id_modelo)
    {
        Modelo::destroy($Id_modelo);
           return view('vistasAdmin/TablaModelo');
    }
}
