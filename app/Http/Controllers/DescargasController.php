<?php

namespace App\Http\Controllers;
use App\Models\Document;
use Illuminate\Http\Request;

class DescargasController extends Controller
{
    public function index(){

        $doc=Document::all();// para mostrar solo un registro de la tabla 
        
        return view('/descargas',['doc'=>$doc,]); 

    }  
}
