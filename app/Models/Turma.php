<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $fillable = [
        'nome',
        'descricao'
    ];
    public function pessoa()
    {
        return $this->hasMany('App\Models\Pessoa');
    }
}
