<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\galeriaimg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GaleriaimgController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
        
        $galeria=galeriaimg::all();
        $galeria=DB::table('imggalerias')
        ->orderBy('id','desc')
        ->paginate(8);
        return view('/admin/galeria/galeria',['galeria'=>$galeria]);
       


    }

    

public function crear(Request $request){
    $request->validate(['foto'=>'required|image|max:2048']);
    
$galeria=new galeriaimg;

if ($request->hasFile('foto')); {

    $file = $request->file('foto');
    $destinoPath ='img/galeria/';
    $filename = Time() . "-" . $file->getClientOriginalName();
    $uploadSuccess =$request->file('foto')->move($destinoPath, $filename);
    $galeria->foto =$destinoPath . $filename;
}
    $galeria->save();
    return back()->with('mensaje','Contenido Agregado');
}

public function edit($id)
    {
        $note=galeriaimg::findOrfail($id);
    //return $note;
    //dd($note);
    return view('/admin/galeria/editar',compact('note'));
    }

    public function update(Request $request, $id)
    {
        //return $request->all();
        $request->validate(['foto'=>'required|image|max:2048']);
        $galeria = galeriaimg::find($id);
      
            if ($request->hasFile('foto')); {
                $file = $request->file('foto');
                $destinoPath ='img/galeria/';
                $filename = Time() . "-" . $file->getClientOriginalName();
                $uploadSuccess =$request->file('foto')->move($destinoPath, $filename);
                $galeria->foto =$destinoPath . $filename;
            }
            
           
            $galeria->save();
       
       return redirect('/admin/galeria/galeria');
    }

    public function delete(Request $request,$id)
    {
        //dd($parnetid);
        $par = galeriaimg::find($id);
        $par-> foto         = $request->foto;
        $par->delete();
     return back()->with('mensaje','Noticia  Eliminada');
          //return view('/admin/parnets') 
    }



}
