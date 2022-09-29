<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\exalumno;
use Illuminate\Http\Request;

class ExalumnosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index(){

        $exalm=exalumno::all();
        return view('/admin/exalumno/exalumno',['exalm'=>$exalm]);

    }

    public function crear(Request $request){

        $exalm=new exalumno;
        
            if ($request->hasFile('foto')); {

                $file = $request->file('foto');
                $destinoPath ='img/exalumno/';
                $filename = Time() . "-" . $file->getClientOriginalName();
                $uploadSuccess =$request->file('foto')->move($destinoPath, $filename);
                $exalm->foto =$destinoPath . $filename;
            }
                $exalm-> nombre   = $request->nombre;
                $exalm-> profesion        = $request->profesion;
                $exalm-> contenido       = $request->contenido;
            
                $exalm->save();
                return back()->with('mensaje','Contenido Agregado');
    }
    public function edit($id)
    {
        $note=exalumno::findOrfail($id);
    //return $note;
    //dd($note);
    return view('/admin/exalumno/editar',compact('note'));
    }

    public function update(Request $request, $id)
    {
        //return $request->all();
        
        $exalum = exalumno::find($id);
      
            if ($request->hasFile('foto')); {
                $file = $request->file('foto');
                $destinoPath ='img/exalumno/';
                $filename = Time() . "-" . $file->getClientOriginalName();
                $uploadSuccess =$request->file('foto')->move($destinoPath, $filename);
                $exalum->foto =$destinoPath . $filename;
            }
            $exalum->  nombre  = $request->nombre;
            $exalum-> profesion   = $request->profesion;
            $exalum-> contenido  = $request->contenido;
            
           
            $exalum->save();
       
       return redirect('/admin/exalumno/exalumno');
    }

    public function delete(Request $request,$id)
    {
        //dd($parnetid);
        $par = exalumno::find($id);
        $par-> foto             = $request->foto;
        $par-> nombre          = $request->nombre;
        $par-> contenido        = $request->contenido;
        $par->delete();
     return back()->with('mensaje','Noticia  Eliminada');
          //return view('/admin/parnets') 
    }
}
