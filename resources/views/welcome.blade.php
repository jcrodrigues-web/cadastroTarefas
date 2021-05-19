@extends('layouts.main')

@section('title', 'Teste Dev Jr')

@section('content')

<!-- <div id="search-container" class="col-md-12">
    <h1>Busque uma tarefa</h1>
    <form action="/" method="GET">
        <input type="text" id="search" nane="search" class="form-control" placeholder="Procurar....">
    </form>
</div> -->

<div id="events-container" class="col-md-12">
    @if($search)
    <h2>Buscando por: {{ $search }}</h2>
    @else
    <h2>Minhas Tarefas</h2>
    <p class="subtitle">Lista de tarefas cadastradas</p>
    @endif

    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Dono</th>
      <th scope="col">Titulo</th>
      <th scope="col">Data</th>
      <th scope="col">Status</th>
      <th scope="col">Descrição</th>
    </tr>
  </thead>

  @foreach($events as $event)
  <tbody>
    <tr>
      <td scope="row">{{ $event->owner }}</td>
      <td>{{ $event->title }}</td>
      <td>{{ date('d/m/y', strtotime($event->date)) }}</td>
      <td>{{ $event->status }}</td>
      <td>{{ $event->description }}</td>

      <td>
       <a href="#" class="btn btn-info edit-btn">Editar</a>
         <form action="/events/{{ $event->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger delete-btn">Deletar
          </form>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
    
    <div id="cards-container" class="row">
    

        @if(count($events) == 0 && $search)
            <p>Não foi possível encontrar nenhuma tarefa com {{ $search }}! <a href="/">Visualizar todos!</a></p>
        @elseif(count($events) == 0)
            <p>Não existe tarefas cadastradas</p>
        @endif
    </div>
</div>

@endsection
