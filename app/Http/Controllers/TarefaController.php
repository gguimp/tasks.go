<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Tarefa;
use Debugbar;

class TarefaController extends Controller
{
	public function __construct()
	{
		$this->middleware("auth");
	}

    public function index(Request $request)
    {
    	$tarefas = Tarefa::all();

			// TODO: Teste de tarefa...

    	return view('tarefas.index', [
    		'tarefas' => $tarefas]);
    }

	public function visualizar(Request $request, Tarefa $tarefa)
	{
		Debugbar::info('teste de mensagem...');
		Debugbar::info($tarefa);

		return view('tarefas.visualizar', [
			'tarefa' => $tarefa
		]);
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
