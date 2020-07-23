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
            <label for="knowledge-list">Avalie seu conhecimento de 0 a 10 nos seguintes itens: </label>
            <ul class="list-group" name="knowledge-list">
                @foreach($knowledge as $k)
                    <li class="list-group-item d-flex justify-content-between align-items-center">{{ $k->name }}</li>
                    <input type="text" class="form-control" name="grade" id="grade">
                @endforeach
            </ul>
        </div>
        <button class="btn btn-primary">Adicionar</button>
    </form>
@endsection
