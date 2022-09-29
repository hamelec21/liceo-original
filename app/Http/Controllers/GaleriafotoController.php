<?php

namespace App\Http\Controllers;
use App\Models\galeriaimg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GaleriafotoController extends Controller
{
    public function index(){

        //$dato= nosotro::where('id',5)->get();// para mostrar solo un registro de la tabla 
        //$team = nosotro::first('contenido',1)->get();// para mostrar solo un registro de la tabla 
       //$partner = partner::where('area','Àrea Financiera')->get();
       $dato = galeriaimg::all();
       $dato=DB::table('imggalerias')
        ->orderBy('id','desc')
        ->paginate(12);

        return view('/galeria-fotografica',['dato'=>$dato]); 
    }
}
