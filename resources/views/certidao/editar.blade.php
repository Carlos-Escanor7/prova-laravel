@extends('layout.site')

@section('titulo', 'Editar produto')

@section('conteudo')
    <div class="container">
        <h3>Editar tabeliao</h3>
        <div class="row">
            <form action="{{ route('prova.atualizarCertidao', $certidao->id) }}" method="post">
                @csrf
                <input type="hidden" name="_method" value="put">
                @include('certidao.formulario')
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </div>

@endsection()
