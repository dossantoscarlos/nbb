<?php

namespace NBB;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Agenda extends Model
{
    public function __construct(){}

    public static function create($valor){
        DB::table('agendas')->insert([
                    'nome'=>$valor['nome'],
                    'tel'=> $valor['tel'],
                    'mensagem'=>$valor['mensagem'],
                    'servico'=>$valor['assunto'],
                    'email'=>$valor['email']]);
    }

    public static function validaSelect($valor){
        return DB::table('servicos')->where('nome', $valor)->get();
    }
    public static function pesquisa(){
        return DB::table('agendas')->paginate(10);
    }
    public static function jsonJS($v){
      return DB::table('agendas')->where('id', $v)->get();
    }

    public static function buscar($busca){
      return DB::table("agendas")->where('nome', 'like',"$busca%")
                ->orWhere('email', 'like',"$busca%")
                ->orWhere('tel', 'like',"$busca%")
                ->paginate(10)->appends(['buscar' => $busca]);
    }

    public static function recent(){
       return DB::table('agendas')->paginate(10);
    }


}
