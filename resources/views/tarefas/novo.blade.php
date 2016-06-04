@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <form action="{{ url('tarefa') }}" method="POST">
            {{ csrf_field() }}

            <!-- Tarefa -->
            <div class="form-group">
                <label for="tarefa-nome">Nova Tarefa</label>
                <input type="text" name="tarefa" id="tarefa-nome" class="form-control">
            </div>
        </form>
    </div>
</div>

@endsection
