<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Projeto;

class ProjetoController extends Controller
{
    public function __construct()
    {
    	$this->middleware("auth");
    }

    public function index(Request $request)
    {
    	$projetos = Projeto::all();

    	return view('projetos.index', [
    		'projetos' => $projetos]);
    }

    public function novo(Request $request)
    {
    	return view('projetos.novo');
    }

    public function salvar(Request $request)
    {
    	$projeto = new Projeto();
    	$projeto->projeto = $request->projeto;

    	$projeto->save();

    	return redirect('/projetos');
    }
}
