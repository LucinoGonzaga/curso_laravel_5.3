<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contato extends Model
{
    public function lista()
    {
        return (object)[
            'nome' => 'Lucino',
            'telefone' => '4512-6549'
        ];
    }
}
