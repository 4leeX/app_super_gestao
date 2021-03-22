<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'produtos';
    protected $fillable = ['nome', 'decricao', 'peso', 'unidade_id'];

    public function itemDetelhe(){
        return $this->hasOne('App\ItemDetalhe', 'produto_id', 'id');
    }
}
