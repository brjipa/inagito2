

@extends('layout')


@section('conteudo')

    <div class="row">
        <h3>Cadastro de Evento</h3>
        *Todos os campos são obrigatorios
    </div>

    {!! Form::open(['route' => 'evento.store', 'method'=>'POST']) !!}
    <div class="row">
        <div class="input-field col s6">
            {!! Form::label('Nome do Evento:') !!}
            {!! Form::text('nome', null) !!}

        </div>

        <div class="input-field col s6">
            {!! Form::label('Tipo do Evento:') !!}
            {!! Form::text('tipo', null) !!}
        </div>
    </div>

    <div class="row">
        <div class="input-field col s5">
            {!! Form::label('Rua:') !!}
            {!! Form::text('rua', null) !!}
        </div>

        <div class="input-field col s3">
            {!! Form::label('Numero:') !!}
            {!! Form::text('num', null) !!}
        </div>

        <div class="input-field col s4">
            {!! Form::label('Bairro:') !!}
            {!! Form::text('bairro', null) !!}
        </div>

        <div class="input-field col s4">
            {!! Form::label('Cidade:') !!}
            {!! Form::text('cidade', null) !!}
        </div>
    </div>

    <h3>Responsavel pelo Evento</h3>

    <div class="row">
        <div class="input-field col s6">
            {!! Form::label('Nome:') !!}
            {!! Form::text('nome_resp', null) !!}
        </div>

        <div class="input-field col s3">
            {!! Form::label('Telefone:') !!}
            {!! Form::text('fone', null) !!}
        </div>

        <div class="input-field col s3">
            {!! Form::label('CPF:') !!}
            {!! Form::text('cpf', null) !!}
        </div>

        <div class="input-field col s3">
            {!! Form::label('E-mail:') !!}
            {!! Form::text('email', null) !!}
        </div>

        <div class="col-lg-6 right">
            <button class="btn waves-effect waves-light" type="submit">Cadastrar</button>
            <a href="/evento" class="waves-effect waves-light btn">Cancelar</a>
        </div>
    </div>
    {{ csrf_field() }}
    {!! Form::close() !!}
@stop