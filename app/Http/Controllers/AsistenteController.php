<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nosotro;

class AsistenteController extends Controller
{
    public function index(){

        $dato= nosotro::where('id',10)->get();// para mostrar solo un registro de la tabla 
        //$team = nosotro::first('contenido',1)->get();// para mostrar solo un registro de la tabla 
       //$partner = partner::where('area','Àrea Financiera')->get();
        return view('/asistentes',['dato'=>$dato]); 


    }
}
