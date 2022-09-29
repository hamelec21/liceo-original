<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\foto;
use App\Models\info;
use App\Models\link;
use App\Models\nosotro;
use App\Models\equipo;
use App\Models\especialidad;
use App\Models\exalumno;
use App\Models\noticia;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class IndexController extends Controller
{

    public function index()
    {

        $info1=info::where('id','1')->get();
        $info2=info::where('id','2')->get();
        $info3=info::where('id','3')->get();
        $info4=info::where('id','4')->get();
        $link=link::all();
        $noso= nosotro::where('id',1)->get();
        $equipo=equipo::all();
        $espe=especialidad::all();
        $exalumno=exalumno::all();
       // $noti=noticia::all();
        $noti = DB::table('noticias')
            ->take(3)
           ->OrderBy('created_at','desc')
            ->get();

        $foto= foto::where('seccion','Home-footer')->get();
        return view('index',['foto'=>$foto , 'info1'=>$info1 , 'info2'=>$info2,'info3'=>$info3,'info4'=>$info4 ,'link'=>$link ,'noso'=>$noso,'equipo'=>$equipo , 'espe'=>$espe ,'exalumno'=>$exalumno , 'noti'=>$noti]);
    }

}
