<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Desarrolladora;
class DesarrolladoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Desarrolladora ['desarrolladoras']=Desarrolladora::paginate(5);
        return view('vistasAdmin/TablaDesarrolladora',$Desarrolladora);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vistasAdmin/Desarrolladora');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $datosDesa=request()->except('_token');
        Desarrolladora::insert($datosDesa);
        return response()->json($datosDesa);
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
    public function edit($Id_desarrolladora)
    {
          $datosDesa = Desarrolladora::findOrFail($Id_desarrolladora);
        return view('vistasAdmin.Desarrolladora', compact('datosDesa'));
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
    public function destroy($Id_desarrolladora)
    {
        Desarrolladora::destroy($Id_desarrolladora);
           return view('vistasAdmin/TablaDesarrolladora');
    }
}
