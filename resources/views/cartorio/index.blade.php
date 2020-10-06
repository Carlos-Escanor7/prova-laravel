@extends('layout.site')

@section('titulo', 'Tabelioes')

@section('conteudo')
    <div class="container">
        <div class="row mt-5 mb-2">
            <div class="col-9">
                <h3>Lista de Tabeliao</h3>
            </div>
            <div class="col-3">
            <a class="btn btn-success" href="{{route('prova.adicionar')}}">Adicionar</a>
            </div>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tabelioes as $tabeliao)
                        <tr>
                            <td>{{ $tabeliao->id }}</td>
                            <td>{{ $tabeliao->nome }}</td>
                            <td>
                            <a class="btn btn-primary" href="{{ route('prova.editar', $tabeliao->id) }}">Editar</a>
                            <form action="{{ route('prova.deletar', $tabeliao->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Deletar</button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
