<?php

namespace App\Http\Controllers\Admin;
use App\Models\foto;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FotoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        
        $foto=foto::all();
        $foto=DB::table('fotos')
        ->orderBy('id','desc')
        ->paginate(8);
        return view('/admin/foto/foto',['foto'=>$foto]);
       
    }

    public function crear(Request $request){
        $request->validate(['foto'=>'required|image|max:2048']);
        
    $foto=new foto;
    
    if ($request->hasFile('foto')); {
    
        $file = $request->file('foto');
        $destinoPath ='img/foto/';
        $filename = Time() . "-" . $file->getClientOriginalName();
        $uploadSuccess =$request->file('foto')->move($destinoPath, $filename);
        $foto->foto =$destinoPath . $filename;
    }

        $foto-> seccion  = $request->seccion;
        $foto->save();
        return back()->with('mensaje','Contenido Agregado');
    }

    public function edit($id)
    {
        $note=foto::findOrfail($id);
    //return $note;
    //dd($note);
    return view('/admin/foto/editar',compact('note'));
    }



    public function update(Request $request, $id)
    {
        //return $request->all();
        $request->validate(['foto'=>'required|image|max:2048']);
        $foto = foto::find($id);
      
            if ($request->hasFile('foto')); {
                $file = $request->file('foto');
                $destinoPath ='img/foto/';
                $filename = Time() . "-" . $file->getClientOriginalName();
                $uploadSuccess =$request->file('foto')->move($destinoPath, $filename);
                $foto->foto =$destinoPath . $filename;
            }

            $foto-> seccion  = $request->seccion;
            
           
            $foto->save();
       
       return redirect('/admin/foto/foto');
    }

    public function delete(Request $request,$id)
    {
        //dd($parnetid);
        $par = foto::find($id);
        $par-> foto         = $request->foto;
        $par-> seccion      = $request->seccion;
        
        $par->delete();
     return back()->with('mensaje','Noticia  Eliminada');
          //return view('/admin/parnets') 
    }

}


