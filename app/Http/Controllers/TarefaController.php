<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TarefaController extends Controller
{
    public function index(Request $request)
    {
    	return view('tarefas.index');
    }

    public function novo(Request $request)
    {
    	return view('tarefas.novo');
    }
}
