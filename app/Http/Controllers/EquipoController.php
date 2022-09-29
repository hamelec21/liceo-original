<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nosotro;
use App\Models\equipo;

class EquipoController extends Controller
{
    public function index(){


        $equipo= nosotro::where('id',4)->get();// para mostrar solo un registro de la tabla
        $team=equipo::all(); 
        //$team = nosotro::first('contenido',1)->get();// para mostrar solo un registro de la tabla 
       //$partner = partner::where('area','Àrea Financiera')->get();
        return view('/nuestro-equipo',['equipo'=>$equipo , 'team'=>$team]); 




    }
}
