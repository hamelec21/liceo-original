<?php

namespace App\Http\Controllers;

use App\Models\nosotro;
use Illuminate\Http\Request;

class NuestraController extends Controller
{
    public function index(){


        $nosotro = nosotro::where('id',2)->get();// para mostrar solo un registro de la tabla 
        //$team = nosotro::first('contenido',1)->get();// para mostrar solo un registro de la tabla 
       //$partner = partner::where('area','Àrea Financiera')->get();
        return view('/nuestra-historia',['nosotro'=>$nosotro]);


    }
}
