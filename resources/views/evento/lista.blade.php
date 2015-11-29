@extends('layout')

@section('conteudo')
    <h3>Eventos Cadastrados</h3>
    <br>
    <table class="table-bordered table">
        <thead>
            <th>Nome do Evento</th>
            <th>Tipo de Evento</th>
        </thead>
        @foreach($eventos as $evento)
        <tbody>
            <td>{{$evento->nomeevento}}</td>
            <td>{{$evento->tipo_evento}}</td>
            <td><a href="{{ route('evento.show', $evento->id) }}" class="btn-floating teal"><img class="button" src="/img/magnifier13.png"></a></td>
            <td><a href="{{ route('evento.edit', $evento->id) }}" class="btn-floating orange accent-4"><img class="button" src="/img/edit26.png"></a></td>
            <td><form method="POST" accept-charset="UTF-8" action='/evento/{{ $evento->id }}'>
                    <button type="submit" class="btn-floating red botaoverm"><img class="lixeira" src="/img/delete96.png"></button>
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                </form>
            </td>
        </tbody>

        @endforeach
    </table>


@stop