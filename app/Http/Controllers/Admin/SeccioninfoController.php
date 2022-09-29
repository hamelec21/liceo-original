<?php

namespace App\Http\Controllers\Admin;
use App\Models\info;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;


class SeccioninfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //listar datos  en la vista 
        
        $info = info::all();// aca se muestran todo los registro de la tabla  
        return view('/admin/info/info',['info' =>$info]);

    }

        public function crear(Request $request){

            $info=new info;
            $info-> titulo   = $request->titulo;
            $info-> contenido = $request->contenido;
            $info->save();
            return back()->with('mensaje','Contenido Agregado');


        }

        public function edit($infoid)
    {
    $note=info::findOrfail($infoid);
    //return $note;
    //dd($note);
    return view('/admin/info/editar',compact('note'));
    }
    public function update(Request $request,$infoid )
    {
        //return $request->all();
        
        $par = info::find($infoid);
        $par-> titulo   = $request->titulo;
        $par-> contenido = $request->contenido;
        
       $par->save();
       return redirect('/admin/info/info');
    }



        


}
