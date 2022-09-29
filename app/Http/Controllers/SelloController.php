<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nosotro;
class SelloController extends Controller
{
    public function index(){
        $sello = nosotro::where('id',3)->get();// para mostrar solo un registro de la tabla 
        //$team = nosotro::first('contenido',1)->get();// para mostrar solo un registro de la tabla 
       //$partner = partner::where('area','Àrea Financiera')->get();
        return view('/nuestro-sello',['sello'=>$sello]); 
}
}
