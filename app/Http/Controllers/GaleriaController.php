<?php

namespace NBB\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;
use NBB\Galeria;
use NBB\Servico;

class GaleriaController extends Controller
{
   public function index($rotulo){
      return view('site.galeria.index',compact('rotulo'));
   }

   public function create(Request $request){
      $galeria = new Galeria();
      $destino = "upload";
      $servico = Servico::todasConsulta();
      if($request->isMethod('post')):
        if($request->file('upload')):
          $this->validate($request,['upload'=>'required']);
          $files = $request->file('upload');
          $files_contando = count($files);
          foreach ($files as $file):
            $storage = Storage::put("uploads",$file);
            $galeria->nomefoto = "storage/".$storage;
            $galeria->save();
          endforeach;
        return redirect()->route('pictures');
      endif;
    endif;
    $find = Galeria::find(1);
    return view('admin.upload.photos', compact(['servico','find']));
  }
}
