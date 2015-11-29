<?php

namespace App\Http\Controllers;

use App\EventoModel;
use App\TipoEvento;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = \App\EventoModel::all();
        return view('evento.lista', compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipo_evento = DB::select('select * from tipo_evento');
        return view('evento.cadastro', compact($tipo_evento));



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \App\EventoModel::create([
            'nomeevento' => $request['nome'],
            'tipo_evento' => $request['tipo'],
            'rua' => $request['rua'],
            'num' => $request['num'],
            'bairro' => $request['bairro'],
            'cidade' => ($request['cidade']),
            'responsavel' => $request['nome_resp'],
            'fone' => $request['fone'],
            'cpf' => $request['cpf'],
            'email' => $request['email'],


        ]);
        return redirect('/evento');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $evento = EventoModel::findOrFail($id);
        return view('evento.detalhe', array('evento' => $evento));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evento = EventoModel::findOrFail($id);
        return view('evento.edita', array('evento' => $evento));
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
        $evento = EventoModel::findOrFail($id);
        $input = $request->all();
        $evento->fill($input)->save();
        return redirect('/evento');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $evento = EventoModel::findOrFail($id);
        $evento->delete();
        return redirect('/evento');
    }
}
