<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventoModel extends Model
{
    protected $table = 'eventos';

    protected $fillable = ['nomeevento', 'tipo_evento','rua', 'num', 'bairro', 'cidade', 'responsavel', 'fone', 'cpf', 'email' ];

    protected $hidden = ['password', 'remember_token','created_at', 'updated_at', 'id'];
}
