<?php

namespace App\Http\Controllers;

use App\Modelos\Cliente;
use App\Modelos\User;
use Illuminate\Http\Request;

class usuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*----------  Se guardan los registro de base de datos en la variable usu  ----------*/
        $usu = User::all();
        
        return view('usuarios.index.index')
            ->with('usu',$usu);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //dd("estamos en create");
        $cli = Cliente::pluck('nameCli', 'id');            
        return view('usuarios.create.create')
            ->with('cli',$cli);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        /* Se inicializa el objeto tipo Usuario */
        $usu = new User();
        /* Se guardan los datos en el objeto */
        $usu->fill($request->all());
        /* Como el password en el objeto User NO es fllable, se quiene que definir */        
        $usu->password = bcrypt($request->password);
        /*----------  Se guarda la informacion de la foto  ----------*/
        request()->file('img')->store('avatar');
        /* Se guardan los datos en la BD */
        $usu->save();
        
        /* Se redirije a la pagina de listar de Usuario */
        return redirect()->route('usuarios.index');
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usu = User::find($id);
        dd($usu);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usu = User::find($id);
        $cli = Cliente::pluck('nameCli', 'id');
        
        return view('usuarios.edit.edit')
            ->with('usu', $usu)
            ->with('cli', $cli);
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
       $usu = User::find($id);
       $usu->fill($request->all());
       $usu->save();

       return redirect()->route('usuarios.index');
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
