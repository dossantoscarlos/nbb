<?php

namespace NBB\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;
use NBB\Galeria;
use NBB\Servico;
use Illuminate\Support\Facades\DB;

class GaleriaController extends Controller
{

   public function index($galerias){
      $servico = DB::table('servicos')->select('*')->where('nome',$galerias)->get();
      foreach($servico as $value){
        $results = DB::table('galerias')->select('*')->where('servico_id',$value->id)->paginate(10);
      }
      return view('site.galeria.index', ['results'=>$results, 'galerias'=>$galerias]);
   }

   public function create(Request $request){
      $galeria = new Galeria();
      $destino = "upload";
      $servico = Servico::todasConsulta();
      
      if($request->isMethod('post')):
       $this->validate($request,['upload'=>'required|mimes:jpg,png,jpeg,gif,bmp']); //se a validacao for acima da condicao isMethod o php lanca invalid request
       Log::debug($request); 
       if($request->file('upload')):
          $files = $request->file('upload');
           $files_contando = count($files);
          foreach ($files as $file):
            $storage = Storage::put("uploads",$file);
            $galeria->id_servico = $request->input('servico');
            $array_nome = explode($storage,'/');
            $galeria->nome =$array_nome[1];
            $galeria->url = "storage/".$storage;
            $galeria->tag=$request->input('tag');
            $galeria->save();
          endforeach;
        return redirect()->route('pictures');
      endif;
    endif;
    $find = Galeria::find(1);
    return view('admin.upload.photos', compact(['servico','find']));
  }
}
