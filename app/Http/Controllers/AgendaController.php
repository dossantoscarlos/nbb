<?php

namespace NBB\Http\Controllers;

use Illuminate\Http\Request;
use NBB\Agenda;

class AgendaController extends Controller
{
    public function __construct(){
      //$this->middleware('auth');
    }

    public function index($servico = null)
    {
        $servicos = Agenda::validaSelect($servico);

        return view('site.contato.index', compact(['servicos']));
    }

    # salvando no banco de dados
    public function create(Request $request,$servico = null)
    {
        $this->validate($request, ['nome'     => 'required|max:100',
                                   'email'    => 'required|email|max:200',
                                   'tel'      => 'required|max:15',
                                   'assunto'  => 'required|max:50',
                                   'mensagem' => 'required|max:300']);
        Agenda::create($request->all());
        return view('site.contato.index');
   }

   public function busca(Request $request){

      if($request->has('buscar')){
         $this->validate($request,['buscar'=>'required|max:30']);
         $pesquisa = Agenda::buscar($request->input('buscar'));
      }else{
         $pesquisa  = Agenda::pesquisa();
      }

    return view('admin.contado.todos',compact('pesquisa'));

   }

   //pega valores via ajax e responde via json
    public function jsonApp($jsonId){
       $resul = Agenda::jsonJS($jsonId);
       return response()->json($resul);
   }

   public function recents(){
     $pesquisa = Agenda::recent();
     return view('admin.contado.ultimos', [ 'pesquisa' => $pesquisa]);
   }

}
