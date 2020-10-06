@extends('layout.site')

@section('titulo', 'Certidões')

@section('conteudo')
    <div class="container">
        <div class="row mt-5 mb-2">
            <div class="col-9">
                <h3>Lista de Certidão</h3>
            </div>
            <div class="col-3">
            <a class="btn btn-success" href="{{route('prova.adicionarCertidao')}}">Adicionar</a>
            </div>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Tipo_Certidao</th>
                        <th scope="col">Envolvido1</th>
                        <th scope="col">Envolvido2</th>
                        <th scope="col">data</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($certidoes as $certidao)
                        <tr>
                            <td>{{ $certidao->id }}</td>
                            <td>{{ $certidao->tipo_certidao }}</td>
                            <td>{{ $certidao->envolvido1 }}</td>
                            <td>{{ $certidao->envolvido2 }}</td>
                            <td>{{ $certidao->data }}</td>

                            <td>
                            <a class="btn btn-primary" href="{{ route('prova.editarCertidao', $certidao->id) }}">Editar</a>
                            <form action="{{ route('prova.deletarCertidao', $certidao->id) }}" method="POST">
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
