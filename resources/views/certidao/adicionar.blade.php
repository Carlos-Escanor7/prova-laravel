@extends('layout.site')

@section('titulo', 'Adicionar Tabeliao')

@section('conteudo')
    <div class="container">
        <h3>Cadastrar Tabeliao</h3>
        <div class="row">
            <form action="{{ route('prova.salvarCertidao') }}" method="post"
            enctype="multipart/form-data">
                @csrf
                @include('certidao.formulario')
                <button type="submit" class="btn btn-primary">Adicionar</button>
            </form>
        </div>
    </div>

@endsection()
