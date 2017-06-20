<?php
namespace NBB\Http\Controllers;

use Illuminate\Http\Request;
use NBB\Servico;

class ServicoController extends Controller
{
    public function index()
    {
      $servicos =[ 'Noiva','Maquiagem Profissional',
                   'Desgner de Penteados','Permanente de Cilios',
                   'Alongamento de Cilios','Desgner de sobrancelhas'
                 ];
      return view('site.servico.index', compact('servicos'));
    }

    public function create(Request $request){
        if($request->isMethod('post')){
          if($request->file('file')):
            $this->validate($request,['servico' => 'required|max:30', 'descricao' => 'required|max:400']);

            $servico = new Servico();
            $servico->nome = $request->input('servico');
        $servico->file = 
            $servico->descricao = $request->input('descricao');
            $servico->save();
            return redirect()->route('create_servico');
          endif;
        }
        return view('admin.servico.create');
    }

    public function repostaJson(){
        $array = Servico::todasConsulta();
        return response()->json($array);
    }
}
