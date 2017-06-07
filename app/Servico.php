<?php
namespace NBB;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Servico extends Model
{
    public static function todasConsulta(){
        return DB::table('servicos')->select(['id','nome'])->get();
    }
}
