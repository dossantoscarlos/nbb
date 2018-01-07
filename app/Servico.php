<?php
namespace NBB;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Servico extends Model
{

    public function galeria(){
      return $this->hasMany('NBB\Galeria');
    }

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

    public static function deletar($id){
      return DB::table('servicos')->where('id',$id)->delete();
    }

}
