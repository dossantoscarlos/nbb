<?php

namespace NBB\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use NBB\User;

class ProfileController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }
    public function index(){
     // return view('admin.profile.index');
    }

    public function edit(Request $request){

      $user = Auth::user();

      $users = ['nome' => $user->name, 'email' => $user->email];

      return view('admin.profile.edit',compact('users'));
    }

    public function verifica(Request $request){
      if($request->isMethod('post')):
        //$array = DB::table('users')->where('password',"$request->('')")->get;
      endif;

      return Response::json($array);
    }

}
