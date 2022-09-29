<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\nosotro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NosotroController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){

        $noso=nosotro::all();
        $noso=DB::table('nosotros')
        ->orderBy('seccion','asc')
        ->paginate(5);
        return view('/admin/nosotro/nosotro',['noso'=>$noso]);

    }

    public function crear(Request $request)
    {
        $nosotro=new nosotro;
        
            if ($request->hasFile('foto')); {

                $file = $request->file('foto');
                $destinoPath ='img/nosotro/';
                $filename = Time() . "-" . $file->getClientOriginalName();
                $uploadSuccess =$request->file('foto')->move($destinoPath, $filename);
                $nosotro->foto =$destinoPath . $filename;
            }
                $nosotro-> seccion          = $request->seccion;
                $nosotro-> contenido        = $request->contenido;
                
            
                $nosotro->save();
                return back()->with('mensaje','Contenido Agregado');
        
    }
    public function edit($id)
    {
        $note=nosotro::findOrfail($id);
    //return $note;
    //dd($note);
    return view('/admin/nosotro/editar',compact('note'));
    }
    public function update(Request $request, $id)
    {
        //return $request->all();
        
        $nosotro = nosotro::find($id);
      
            if ($request->hasFile('foto')); {
                $file = $request->file('foto');
                $destinoPath ='img/nosotro/';
                $filename = Time() . "-" . $file->getClientOriginalName();
                $uploadSuccess =$request->file('foto')->move($destinoPath, $filename);
                $nosotro->foto =$destinoPath . $filename;
            }
                $nosotro-> seccion          = $request->seccion;
                $nosotro-> contenido        = $request->contenido;
           
            $nosotro->save();
       
       return redirect('/admin/nosotro/nosotro');
    }
}
