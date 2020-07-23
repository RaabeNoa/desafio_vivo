@extends('layout')
@section('title')
    Conhecimentos
@endsection
@section('header')
    Conhecimentos
@endsection
@section('content')
    @if(!empty($message))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif
    <a href="{{ route('form_add_knowledge') }}" class="btn btn-dark mb-2">Adicionar</a>
    <ul class="list-group">
        @foreach($knowledge as $k)
            <li class="list-group-item d-flex justify-content-between align-items-center"> {{ $k->name }}
                <form method="post" action="{{ route('delete_knowledge', ['id' => $k->id])}}" onsubmit="return confirm('Tem certeza que deseja excluir {{ addslashes($k->name) }} ?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
