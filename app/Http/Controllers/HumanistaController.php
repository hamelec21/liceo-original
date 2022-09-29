<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\especialidad;
use App\Models\foto;
use Illuminate\Support\Facades\DB;
class HumanistaController extends Controller
{
    public function index(){
    $dato= especialidad::where('id',1)->get();// para mostrar solo un registro de la tabla 
   $foto= foto::where('seccion','Cientifico Humanista')->get();// para mostrar solo un registro de la tabla 
        //$team = nosotro::first('contenido',1)->get();// para mostrar solo un registro de la tabla 
       //$partner = partner::where('area','Àrea Financiera')->get();
        return view('/cientifico-humanista',['dato'=>$dato ,'foto'=>$foto]); 
    }

}
