<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModeloController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   

    public function Modelo()
    {
       return view('vistasAdmin/Modelo');
      
    }

     public function Create()
    {
       //
      
    }

    public function store(Request $request)
    {
        //$datosdeModelo=request()->all();
        $datosdeModelo=request()->except('_token');
        store::insert($datosdeModelo);
        return response()-> json($datosdeModelo);
    }

}
