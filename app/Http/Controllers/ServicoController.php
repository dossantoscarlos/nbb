<?php
namespace NBB\Http\Controllers;

use Illuminate\Http\Request;
use NBB\Servico;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

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
          $this->validate($request,['servico' => 'required|max:30','uploads' => 'required','descricao' => 'required|max:400'],
                                   [ 'servico.required' => 'Forneça o nome do serviço','servico.max:30' => 'O tamanho maximo é de 30 caracteres',
                                     'uploads.required' => 'Envie um icone para o serviço','descricao.required' => 'A descrição do serviço deve ser fornecida',
                                     'descricao.max:400' => 'O tamanho excedeu a 400 caracteres'
                                    ]);

          if($request->hasFile('upload')):
           $servico = new Servico();
            $storage =  Storage::put('icons' , $request->file('upload'));
            $servico->nome = $request->input('servico');
            $servico->icon = "storage/".$torage;
            $servico->descricao = $request->input('descricao');
            $servico->save();
            Log::info($storage);
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
