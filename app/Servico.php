<?php
namespace NBB;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Servico extends Model
{

    public function __constuct(){
      //
    }

    public static function todasConsulta()
    {
        return DB::table('servicos')->select(['id','nome'])->get();
    }

    public static function getInfo()
    {
      return DB::table('servicos')->select('*')->get();
    }

    public static function paginar()
    {
      return  DB::table('servicos')->paginate(9);
    }


}
