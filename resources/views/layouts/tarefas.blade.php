@extends('layouts.main')

@section('title', 'Teste Dev Jr')

@section('content')

<h1>Cadastro de Tarefas</h1>

@if($busca != '')
<p>O usuário está buscando por: {{ $busca }}</p>
@endif

@endsection