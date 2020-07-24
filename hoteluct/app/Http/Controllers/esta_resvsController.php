<?php

namespace App\Http\Controllers;
use App\est_resv;
use App\Reserva;
use Illuminate\Http\Request;

class esta_resvsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['est_resv']=est_resv::all();

        return view('est_resv.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $reserva=reserva::all();
        return view('est_resv.create',compact('reserva'));
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
        $datosest_resv=request()-> except('_token');

        est_resv::insert($datosest_resv);

        //return response()->json($datoshabitaciones);
        return redirect('est_resv');
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
        $est_resv =est_resv::findOrFail($id);

        return view('est_resv.edit',compact('est_resv'));
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
        $datosest_resv=request()-> except(['_token','_method']);
        est_resv::where ('id','=',$id)->update($datosest_resv);

        $est_resv =est_resv::findOrFail($id);
        return redirect('est_resv');
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
        est_resv::destroy($id);

        return redirect('est_resv');
    }
}
