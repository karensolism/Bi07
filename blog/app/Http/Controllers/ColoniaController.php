<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Colonia;
use App\Ciudad;
use App\Estado;

class ColoniaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Colonia ['colonias']=Colonia::paginate(5);
        return view('vistasAdmin/TablaColonia',$Colonia);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Ciudad ['ciudads']=Ciudad::paginate(5);
        return view('vistasAdmin/Colonia',$Ciudad);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $datosColonia==request()->except('_token');      
        return response()->json($datosCiudad);
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
    public function edit($Id_colonia)
    {
         $datosColonia = Colonia::findOrFail($Id_colonia);
        return view('vistasAdmin.Colonia', compact('datosColonia'));
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
    public function destroy($Id_colonia)
    {
        Colonia::destroy($Id_colonia);
           return view('vistasAdmin/Colonia');
    }
}
