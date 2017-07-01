<?php

namespace NBB;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    public function servico(){
      return $this->belongsTo('NBB\Servico');
    }

}
