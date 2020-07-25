<?php

namespace App\Http\Controllers;
use App\Reserva;
use App\habitaciones;
use App\servicio;
use Illuminate\Http\Request;

class reserva2Controller extends Controller
{
    /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function index()
    {
        //
        $datos['reserva']=reserva::all();

        return view('reservaclient.index',$datos);
    }
    
    /*
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $habitaciones=habitaciones::all();
        $servicio=servicio::all();
        return view('reservaclient.create',compact('habitaciones','servicio'));
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datosreserva=request()-> except('_token');

        reserva::insert($datosreserva);

        return redirect('reserva2');
    }


    public function buscar()
{
     

 
$data = DB::table('reserva')->select('id')->take(1)->get();

      //aquí puedes pasar la información que necesites dentro de un array yo uso compac porque me gusta :-)  
     return View::make('reservaclient.index', compact('data') );
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

    /*
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
    
    public function edit($id)
    {
        //
        $reserva =reserva::findOrFail($id);

        return view('reserva.edit',compact('reserva'));
    }
    */
    /*
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     
    public function update(Request $request, $id)
    {
        //
        $datosreserva=request()-> except(['_token','_method']);
        reserva::where ('id','=',$id)->update($datosreserva);

        $reserva =reserva::findOrFail($id);
        return redirect('reserva');
    }
    */
    /*
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     
    public function destroy($id)
    {
        //
        reserva::destroy($id);

        return redirect('reserva');
    }
    */
}
