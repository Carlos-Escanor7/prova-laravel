@extends('layout.site')

@section('titulo', 'Adicionar Tabeliao')

@section('conteudo')
    <div class="container">
        <h3>Cadastrar Tabeliao</h3>
        <div class="row">
            <form action="{{ route('prova.salvar') }}" method="post"
            enctype="multipart/form-data">
                @csrf
                @include('cartorio.formulario')
                <button type="submit" class="btn btn-primary">Adicionar</button>
            </form>
        </div>
    </div>

@endsection()
