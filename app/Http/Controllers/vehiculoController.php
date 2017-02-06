<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modelos\User;
use App\Modelos\Vehiculos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class vehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehiculo = Vehiculos::all();

        $vehiculo->each(function($vehiculo){
            $vehiculo->conductor;
        });

        return view('vehiculo.index.index')
            ->with('vehiculo', $vehiculo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $con = User::select(DB::raw('CONCAT(name," ",apellido) AS fullname, id'))
            ->where('type','conductor')
            ->pluck('fullname','id');
        return view('vehiculo.create.create')
            ->with('con',$con);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ve = new Vehiculos();
        $ve->fill($request->all());
        $ve->responsabilidadCivil = new Carbon($request->responsablilidadCivil);

        $ve->save();

        return redirect()->route('vehiculo.index');
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
    public function destroy($id)
    {
        //
    }
}
