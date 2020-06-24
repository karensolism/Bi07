<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsesorController extends Controller
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
   

    public function Asesor()
    {
       return view('vistasAdmin/Asesor');
      
    }

    public function Create()
    {
       //return view('vistasAdmin/Desarrolladora');
      
    }
}
