@extends('layout')
@section('title')
    Aplicação Vivo
@endsection
@section('header')
    Aplicar - Vaga Desenvolvedor
@endsection
@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post">
        @csrf
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" name="name" id="name">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" id="email">
            <hr>
            <label for="knowledge-list mb-2">Avalie seu conhecimento de 0 a 10 nos seguintes itens: </label>
                @foreach($knowledge as $k)
                    <div class="row">
                        <div class="col col-2"><label for="grade mb-2">{{ $k->name }}</label></div>
                        <div class="col col-2"><input type="number" class="form-control" name="grade" id="grade" style="width: 4em; height: 2em;"></div>
                    </div>
                @endforeach
        </div>
        <button class="btn btn-primary">Adicionar</button>
    </form>
@endsection
