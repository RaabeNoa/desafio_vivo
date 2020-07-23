@extends('layout')
@section('title')
    Candidaturas
@endsection
@section('header')
    Lista de Candidaturas
@endsection
@section('content')
    @if(!empty($message))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif
    <ul class="list-group">
        @foreach($application as $ap)
            <li class="list-group-item"> {{ $ap->name }} - {{$ap->email}} </li>
        @endforeach
    </ul>
@endsection
