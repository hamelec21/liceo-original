<?php

namespace App\Http\Controllers;
use App\Models\especialidad;
use App\Models\foto;
use Illuminate\Http\Request;

class ElectricidadController extends Controller
{
    public function index(){

        $dato= especialidad::where('id',2)->get();// para mostrar solo un registro de la tabla 
        $foto= foto::where('seccion','Electricidad')->get();
        //$team = nosotro::first('contenido',1)->get();// para mostrar solo un registro de la tabla 
       //$partner = partner::where('area','Àrea Financiera')->get();
        return view('/electricidad',['dato'=>$dato,'foto'=>$foto]); 

    }
}
