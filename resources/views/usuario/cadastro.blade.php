

@extends('layout')


@section('conteudo')

<div class="row">
    <h1>Cadastro</h1>
    *Todos os campos são obrigatorios
</div>

{!! Form::open(['route' => 'usuario.store', 'method'=>'POST']) !!}
<div class="row">
    <div class="input-field col s6">
        {!! Form::label('Nome:') !!}
        {!! Form::text('nome', null) !!}

    </div>

    <div class="input-field col s6">
        {!! Form::label('Sobrenome:') !!}
        {!! Form::text('sobrenome', null) !!}
    </div>
</div>

<div class="row">
    <div class="input-field col s6">
        {!! Form::label('Senha:') !!}
        {!! Form::password('senha', null) !!}
    </div>

    <div class="input-field col s6">
        {!! Form::label('Confirme sua Senha:') !!}
        {!! Form::password('confsenha', null) !!}
    </div>
</div>

<div class="row">
    <div class="input-field col s4">
        {!! Form::label('CPF:') !!}
        {!! Form::text('cpf', null) !!}
    </div>

    <div class="input-field col s4">
        {!! Form::label('RG:') !!}
        {!! Form::text('rg', null) !!}
    </div>

    <div class="input-field col s4">
        {!! Form::label('Telefone:') !!}
        {!! Form::text('fone', null) !!}
    </div>
</div>

<div class="row">
    <div class="input-field col s5">
        {!! Form::label('Rua:') !!}
        {!! Form::text('rua', null) !!}
    </div>

    <div class="input-field col s4">
        {!! Form::label('Bairro:') !!}
        {!! Form::text('bairro', null) !!}
    </div>

    <div class="input-field col s3">
        {!! Form::label('Numero:') !!}
        {!! Form::text('num', null) !!}
    </div>

    <div class="input-field col s4">
        {!! Form::label('Cidade:') !!}
        {!! Form::text('cidade', null) !!}
    </div>
</div>

<div class="row">
    <div class="input-field col s6">
        {!! Form::label('E-mail:') !!}
        {!! Form::text('email', null) !!}
    </div>

    <div class="col-lg-6 right">
        {!! Form::submit('Enviar') !!}
    </div>
</div>
    {{ csrf_field() }}
{!! Form::close() !!}
@stop