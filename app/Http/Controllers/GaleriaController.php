<?php

namespace NBB\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use NBB\Galeria;
use NBB\Servico;

class GaleriaController extends Controller
{
   public function index($rotulo){
      return view('site.galeria.index',compact('rotulo'));
   }

   public function create( Request $request){
      $galeria = new Galeria();
      $servico = Servico::todasConsulta();
      if($request->isMethod('post')):
        if($request->file('file_show')):
          $formFile = Storage::putFile('images',$request->file(['file_show']));
          $url = Storage::url($formFile);
          /*
            $galeria->nomefoto = $request->input('galeria');
            $galeria->id_servico = $request->input('servico');
            $galeria->save();
           */

          //$formFile = $request->file(['file_show']);
         return redirect()->route('pictures');
      endif;
    endif;
    Log::info("consulta: ".$servico);
    return view('admin.upload.photos', compact('servico'));
  }
}
