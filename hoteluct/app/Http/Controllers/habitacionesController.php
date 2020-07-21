<?php

namespace App\Http\Controllers;
use App\habitaciones;
use Illuminate\Http\Request;
//use Illuminate\Http\Response;

class habitacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $datos['habitaciones']=habitaciones::paginate(5);

        return view('habitaciones.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('habitaciones.create');
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
        $datoshabitaciones=request()-> except('_token');

        habitaciones::insert($datoshabitaciones);

        //return response()->json($datoshabitaciones);
        return redirect('habitaciones');

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
        $habitaciones =habitaciones::findOrFail($id);

        return view('habitaciones.edit',compact('habitaciones'));
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
        $datoshabitaciones=request()-> except(['_token','_method']);
        habitaciones::where ('id','=',$id)->update($datoshabitaciones);

        $habitaciones =habitaciones::findOrFail($id);
        return redirect('habitaciones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        habitaciones::destroy($id);

        return redirect('habitaciones');
    }
}
