@extends('layout')

@section('conteudo')
<div class="row">
    <div class="col s6">
    <h4>Detalhes do evento</h4>
    <br>
        <table class="table table-bordered responsive-table">
        <tr>
            <td>Nome do Evento:</td>
            <td>{{ $evento->nomeevento }}</td>
        </tr>
        <tr>
            <td>Tipo de Evento:</td>
            <td>{{$evento->tipo_evento}}</td>
        </tr>
        <tr>
            <td>Endereço:</td>
            <td>{{$evento->rua.' Nº '.$evento->num}}</td>
        </tr>
        <tr>
            <td>Bairro:</td>
            <td>{{$evento->bairro}}</td>
        </tr>
     </table>


    <h4>Detalhes do responsável</h4>
    <br>
    <table class="table table-bordered responsive-table">
        <tr>
            <td>Nome:</td>
            <td>{{ $evento->responsavel }}</td>
        </tr>
        <tr>
            <td>Telefone:</td>
            <td>{{$evento->fone}}</td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>{{$evento->email}}</td>
        </tr>
    </table>
        <br>
        <a href="/evento" class="waves-effect waves-light btn">Voltar</a>
    </div>
    <div class="col s6">
        <h4>Como chegar</h4>
        <br>
        <img class="responsive-img" src="/img/mapa.gif">
    </div>

    </div>
@stop