<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    protected $table = 'tarefas';

    public function projeto()
    {
    	return $this->belongsTo(Projeto::class);
    }
}
