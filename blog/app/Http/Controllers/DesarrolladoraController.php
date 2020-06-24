<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesarrolladoraController extends Controller
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
   

    public function Desarrolladora()
    {
       return view('vistasAdmin/Desarrolladora');
      
    }
     public function Create()
    {
       //return view('vistasAdmin/Desarrolladora');
      
    }

}
