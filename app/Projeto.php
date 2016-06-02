<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
	protected $table = "projetos";

	public function cliente()
	{
		return $this->belongsTo(Cliente::class);
	}
}
