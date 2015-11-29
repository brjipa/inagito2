

@extends('layout')


@section('conteudo')

    <div class="row">
        <h3>Editar Evento</h3>
        *Todos os campos são obrigatorios
    </div>

    <form method="POST" accept-charset="UTF-8" action="/evento/{{ $evento->id }}">
    <div class="row">
        <div class="input-field col s6">
            {!! Form::label('Nome do Evento:') !!}
            {!! Form::text('nomeevento', $evento->nomeevento) !!}

        </div>

        <div class="input-field col s6">
            {!! Form::label('Tipo do Evento:') !!}
            {!! Form::text('tipo_evento', $evento->tipo_evento) !!}
        </div>
    </div>

    <div class="row">
        <div class="input-field col s5">
            {!! Form::label('Rua:') !!}
            {!! Form::text('rua', $evento->rua) !!}
        </div>

        <div class="input-field col s3">
            {!! Form::label('Numero:') !!}
            {!! Form::text('num', $evento->num) !!}
        </div>

        <div class="input-field col s4">
            {!! Form::label('Bairro:') !!}
            {!! Form::text('bairro', $evento->bairro) !!}
        </div>

        <div class="input-field col s4">
            {!! Form::label('Cidade:') !!}
            {!! Form::text('cidade', $evento->cidade) !!}
        </div>
    </div>

    <h3>Responsavel pelo Evento</h3>

    <div class="row">
        <div class="input-field col s6">
            {!! Form::label('Nome:') !!}
            {!! Form::text('nome_resp', $evento->responsavel) !!}
        </div>

        <div class="input-field col s3">
            {!! Form::label('Telefone:') !!}
            {!! Form::text('fone', $evento->fone) !!}
        </div>

        <div class="input-field col s3">
            {!! Form::label('CPF:') !!}
            {!! Form::text('cpf', $evento->cpf) !!}
        </div>

        <div class="input-field col s3">
            {!! Form::label('E-mail:') !!}
            {!! Form::text('email', $evento->email) !!}
        </div>

        <div class="col-lg-6 right btn-flat">
            <button class="btn waves-effect waves-light" type="submit">Atualizar</button>
            <a href="/evento" class="waves-effect waves-light btn">Cancelar</a>


        </div>
    </div>
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    </form>
@stop