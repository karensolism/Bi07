<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ciudad;
use App\Estado;


class CiudadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Ciudad ['ciudads']=Ciudad::paginate(5);
        return view('vistasAdmin/TablaCiudad',$Ciudad);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         

          $Estado ['estados']=Estado::paginate(5);
        return view('vistasAdmin/Ciudad',$Estado);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $datosCiudad=request()->except('_token');
        Ciudad::insert($datosCiudad);
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
    public function edit($id_ciudad)
    {
        $datosCiudad = Ciudad::findOrFail($id_ciudad);
        return view('vistasAdmin.Ciudad', compact('datosCiudad'));
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
    public function destroy($id_ciudad)
    {
        Ciudad::destroy($id_ciudad);
           return view('vistasAdmin/Ciudad');
    }
}
