@extends('layouts.master')

@include('layouts.navbar')

@section('content')

<table class="table table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Tarefa</th>
			<th>...</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th>1</th>
			<td>Tarefa 01</td>
			<td><a href="#">Excluir...</a></td>
		</tr>

		<tr>
			<th>2</th>
			<td>Tarefa 02</td>
			<td><a href="#">Excluir...</a></td>
		</tr>
	</tbody>
</table>

<div class="form-group">
	<a href="{{ url("tarefas/novo") }}" class="btn btn-primary">Nova Tarefa</a>
</div>

@endsection