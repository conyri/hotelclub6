<?php

namespace App\Http\Controllers;
use App\cotizacion;
use Illuminate\Http\Request;

class cotizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['cotizacion']=cotizacion::paginate(5);

        return view('cotizacion.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cotizacion.create');
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
        $datoscotizacion=request()-> except('_token');

        cotizacion::insert($datoscotizacion);

        //return response()->json($datoshabitaciones);
        return redirect('cotizacion');
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
        $cotizacion =cotizacion::findOrFail($id);

        return view('cotizacion.edit',compact('cotizacion'));
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
        $datoscotizacion=request()-> except(['_token','_method']);
        cotizacion::where ('id','=',$id)->update($datoscotizacion);

        $cotizacion =cotizacion::findOrFail($id);
        return redirect('cotizacion');
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
        cotizacion::destroy($id);

        return redirect('cotizacion');
    }
}
