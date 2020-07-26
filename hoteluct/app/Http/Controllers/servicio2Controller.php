<?php

namespace App\Http\Controllers;
use App\servicio;
use Illuminate\Http\Request;

class servicio2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['servicio']=servicio::all();

        return view('servicios2.index',$datos);
    }

   
}
