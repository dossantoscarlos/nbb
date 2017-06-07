<?php

namespace NBB\Http\Controllers;

use Illuminate\Http\Request;
use NBB\LandPage;

class LandPageController extends Controller
{
    public function store(Request $request){
        if ($request->has('email') && $request->isMethod('post')):
            $landpage = new LandPage();
            $this->validate($request,['email'=>'required']);
            $result = $landpage->insert($request->input('email'));
        endif;
        return  view('site.home',compact('result'));
    }
}
