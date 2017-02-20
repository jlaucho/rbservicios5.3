<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modelos\User;
use App\Modelos\Cliente;
use DB;
use Illuminate\Http\JsonResponse;
use App\Modelos\Ticket;
use Carbon\Carbon;
use App\Http\Requests\ticketRequest;

class ticketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ticket = Ticket::all();
        return view('ticket.index.index')
            ->with('ticket', $ticket);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*$usuario = User::select(DB::raw('CONCAT(name," ",apellido) AS fullname, id'))
            ->where('type','usuario_cliente')
            ->pluck('fullname','id');*/
        $cliente = Cliente::all()->pluck('nameCli', 'id');
        
        return view('ticket.create.create')
           // ->with('usuario', $usuario)
            ->with('cliente', $cliente);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ticketRequest $request)
    {
        $ticket = new Ticket();
        $ticket->fill($request->all());
        $ticket->fechaServicio = new Carbon($request->fechaServicio);
        $ticket->numTicket = time().''.\Auth::User()->id;
        $ticket->numTicket = substr($ticket->numTicket, 1);
        $ticket->idUser = \Auth::User()->id;
        
        $ticket->save();

        return redirect()->route('tickets.index')
            ->with('menssage', 'Se ha guardado exitosamente el Ticket');
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
        $ticket = Ticket::find($id);
        $cliente = Cliente::all()->pluck('nameCli', 'id');
        
        return view('ticket.edit.edit')
            ->with('ticket', $ticket)
            ->with('cliente', $cliente);
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
    public function cambiarUsuario(Request $request)
    {   
        $usuario = User::select(DB::raw('CONCAT(name," ",apellido) AS fullname, usuarios_cliente.id'))
            ->join('usuarios_cliente','users.id','=','usuarios_cliente.id_User')
            ->where('usuarios_cliente.id_Cliente',$request->dato)
            ->get();
        return response()->json($usuario);
    }
    public function cerrar($id)
    {
        $ticket = Ticket::find($id);
        dd('Estamos en cerrar');
        $cliente = Cliente::all()->pluck('nameCli', 'id');
        
        return view('ticket.edit.edit')
            ->with('ticket', $ticket)
            ->with('cliente', $cliente);
    }
}
