@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <form action="{{ url('tarefa') }}" method="POST">
            {{ csrf_field() }}

            <!-- Tarefa -->
            <div class="form-group">
                <label for="tarefa-nome">Tarefa</label>
                <input type="text" name="tarefa" id="tarefa-nome" class="form-control">
            </div>

            <!-- Descrição da Tarefa -->
            <div class="form-group">
                <label for="tarefa-descricao">Descrição...</label>
                <textarea name="descricao" id="tarefa-descricao" rows="3" class="form-control">
                </textarea>
            </div>

            <!-- Botão salvar. -->
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-plus"></i>Salvar</button>
        </form>
    </div>
</div>

@endsection
