<?php

namespace NBB;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class LandPage extends Model
{
    public function __construct(){}

    public function insert($valor){
        if(count($this->seach($valor))==0):
            DB::insert('insert into landpage (email) values (?)',[$valor]);
            return true;
         elseif(count($this->seach($valor))>0):
            return true;
        else:
            return false;
        endif;
    }

    public function seach($valor){
        return DB::table('landpage')->select('*')->where('email',$valor)->get();
    }

}
