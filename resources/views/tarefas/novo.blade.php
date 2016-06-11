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
                <label for="tarefa-descricao">Detalhes...</label>
                <textarea name="detalhes" id="tarefa-detalhes" rows="3" class="form-control">
                </textarea>
            </div>

            <!-- Projeto relacionado -->
            <div class="form-group">
                <label for="tarefa-projeto">Projeto</label>
                <select name="projeto_id" id="tarefa-projeto" class="form-control">
                    <option value="1">Projeto 01</option>
                    <option value="2">Projeto 02</option>
                    <option value="3">Projeto 03</option>
                </select>
            </div>

            <!-- Botão salvar. -->
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-plus"></i>Salvar</button>
        </form>
    </div>
</div>

@endsection
