@extends('layout')

@section('conteudo')
    <h3>Eventos Cadastrados</h3>
    <br>
    <table class="table-bordered table" summary="A tabela exibe uma lista de eventos cadastrados, possuindo mais a esquerda o nome do evento, ao lado do nome temos o tipo do evento e a direita botoes que indicam a visualização dos detalhes do evento, outro botao para a edição do mesmo e por ultimo um botao para exclusão do evento" >
        <thead>
        <tr>
            <th>Nome do Evento</th>
            <th>Tipo de Evento</th>
        </tr>
        </thead>
        @foreach($eventos as $evento)
        <tbody>
        <tr>
            <td>{{$evento->nomeevento}}</td>
            <td>{{$evento->tipo_evento}}</td>
            <td><a href="{{ route('evento.show', $evento->id) }}" class="btn-floating teal"><img class="button" src="/img/magnifier13.png" alt="Visualizar detalhes do evento {{$evento->nome}}"></a></td>
            <td><a href="{{ route('evento.edit', $evento->id) }}" class="btn-floating orange accent-4"><img class="button" src="/img/edit26.png" alt="Editar detalhes do evento {{$evento->nome}}"></a></td>
            <td><form method="POST" accept-charset="UTF-8" action='/evento/{{ $evento->id }}'>
                    <button type="submit" class="btn-floating red botaoverm"><img class="lixeira" src="/img/delete96.png" alt="Exluir evento {{$evento->nome}}"></button>
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                </form>
            </td>
        </tr>
        </tbody>

        @endforeach
    </table>


@stop