<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Tarefa;

class TarefaController extends Controller
{
    public function index(Request $request)
    {
    	$tarefas = Tarefa::all();

    	return view('tarefas.index', [
    		'tarefas' => $tarefas]);
    }

    public function novo(Request $request)
    {
    	return view('tarefas.novo');
    }

    public function salvar(Request $request)
    {
    	$tarefa = new Tarefa();
    	$tarefa->tarefa = $request->tarefa;
    	$tarefa->detalhes = $request->detalhes;

    	$tarefa->save();

    	return redirect('/tarefas');
    }
}
