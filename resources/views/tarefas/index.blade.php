@extends('layouts.master')

@include('layouts.navbar')

@section('content')

@if (count($tarefas) > 0)
	<table class="table table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>Tarefa</th>
				<th>...</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($tarefas as $tarefa)
				<tr>
					<th>{{ $tarefa->id }}</th>
					<td><a href="{{ url('tarefa/' . $tarefa->id) }}">{{ $tarefa->tarefa }}</a></td>
					<td><a href="#">Excluir...</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>

	<div class="form-group">
		<a href="{{ url("tarefas/novo") }}" class="btn btn-primary">Nova Tarefa</a>
	</div>
@endif

@endsection
