@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="page-header">
            <h1>{{ $tarefa->tarefa }}</h1>
            <p>{{ $tarefa->detalhes }} </p>
        </div>

        <a href="{{ url("/tarefas") }}" class="btn btn-default" role="button">Voltar...</a>
    </div>
</div>

@endsection
