<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaTarefas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('tarefas', function (Blueprint $table) {
            
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('tarefa', 50);
            $table->string('detalhes', 200);
            $table->integer('projeto_id')->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tarefas');
    }
}
