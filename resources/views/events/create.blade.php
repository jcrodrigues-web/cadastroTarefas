@extends('layouts.main')

@section('title', 'Crie uma tarefa')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie a sua tarefa</h1>
    <form action="/events" method="POST">
        @csrf  <!-- Eviar o formulário para o banco -->
        <div class="form-group">
            <label for="title">Título da Tarefa:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome da Tarefa" required>
        </div>
        <div class="form-group">
            <label for="title">Data Conclusão:</label>
            <input type="date" class="form-control" id="date" name="date" placeholder="Nome da Tarefa" required>
        </div>
        <div class="form-group">
            <label for="title">Dono da Tarefa:</label>
            <input type="text" class="form-control" id="owner" name="owner" placeholder="Nome da Tarefa" required>
        </div>
        <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder=" Descrição da tarefa"required></textarea>
        </div>
        <div class="form-group">
            <label for="title">Status:</label>
            <select name="status" id="status" class="form-control" required>
                <option value="Aberta">Aberta</option>
                <option value="Em Desenvolvimento">Em Desenvolvimento</option>
                <option value="Concluida">Concluída</option>
                <option value="Em atraso">Em atraso</option>
            </select>
        </div>
        <input type="submit" class="btn btn-primary" value="Criar Tarefa">
    </form>
</div>

@endsection