<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DocController extends Controller
{
    public function __construct()

    {
         $this->middleware('auth');  
    }



    public function index(){
        
        $doc = Document::all()->sortBy("id");//
       
        return view('/admin/documento/documento',['doc' =>$doc]);

    }
    public function crear(Request $request){
        $doc=new Document;
        
        if ($request->hasFile('documento')); {
            $file = $request->file('documento');
            $destinoPath ='doc/documento/';
            $filename = Time() . "-" . $file->getClientOriginalName();
            $uploadSuccess =$request->file('documento')->move($destinoPath, $filename);
            $doc->documento =$destinoPath . $filename;
        }
        
            $doc-> nombre   = $request->nombre;
            $doc->save();
            return back()->with('mensaje','Contenido Agregado');

    }

    public function edit($id)
    {
        $note=Document::findOrfail($id);
    //return $note;
    //dd($note);
    return view('/admin/documento/editar',compact('note'));
    }

    public function update(Request $request, $id)
    {
        //return $request->all();
        
        $doc = Document::find($id);
      
            if ($request->hasFile('documento')); {
                $file = $request->file('documento');
                $destinoPath ='doc/documento/';
                $filename = Time() . "-" . $file->getClientOriginalName();
                $uploadSuccess =$request->file('documento')->move($destinoPath, $filename);
                $doc->documento =$destinoPath . $filename;
            }
            $doc-> nombre   = $request->nombre;
           
            $doc->save();
       
       return redirect('/admin/documento/documento');
    }
    public function delete(Request $request,$id)
    {
        //dd($parnetid);
        $par = Document::find($id);
        $par-> foto         = $request->foto;
        $par-> nombre          = $request->nombre;
        $par->delete();
     return back()->with('mensaje','Noticia  Eliminada');
          //return view('/admin/parnets') 
    }
}
