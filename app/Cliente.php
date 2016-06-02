<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
	protected $table = 'clientes';

	public function cliente()
	{
		return $this->belongsTo(Cliente::class);
	}
}
