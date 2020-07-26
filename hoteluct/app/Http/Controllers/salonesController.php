<?php

namespace App\Http\Controllers;
use App\salones;
use Illuminate\Http\Request;

class salonesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['salones']=salones::all();

        return view('salones.index',$datos);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('salones.create');
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
        $datossalones=request()-> except('_token');

        salones::insert($datossalones);

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
        $salones =salones::findOrFail($id);

        return view('salones.edit',compact('salones'));
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
        $datossalones=request()-> except(['_token','_method']);
        salones::where ('id','=',$id)->update($datossalones);

        $salones =salones::findOrFail($id);
        return redirect('salones');
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
        salones::destroy($id);

        return redirect('salones');
    }
}
