@extends('layout')

@section('conteudo')

    {!! Form::open(['route'=>'/auth/login', 'method'=> 'POST']) !!}
        <div class="input-field col s6">
        {!! Form::label('Email:') !!}
        {!! Form::text('email', null) !!}

         </div>

        <div class="input-field col s6">
        {!! Form::label('Senha:') !!}
        {!! Form::text('senha', null) !!}

        </div>
    {!! Form::close() !!}
@stop