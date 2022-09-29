<?php

namespace App\Http\Controllers\Admin;


use App\Models\link;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class LinkController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //listar datos  en la vista 
        
        $link = link::all();// aca se muestran todo los registro de la tabla  
        return view('/admin/link/link',['link' =>$link]);

    }

        public function crear(Request $request)
        {

            $link=new link;
            if ($request->hasFile('foto')); {

                $file = $request->file('foto');
                $destinoPath ='img/link/';
                $filename = Time() . "-" . $file->getClientOriginalName();
                $uploadSuccess =$request->file('foto')->move($destinoPath, $filename);
                $link->foto =$destinoPath . $filename;
            }
            $link-> url   = $request->url;
            
            $link->save();
            return back()->with('mensaje','Contenido Agregado');


        }

        public function edit($linkid)
    {
    $note=link::findOrfail($linkid);
    //return $note;
    //dd($note);
    return view('/admin/link/editar',compact('note'));
    }



    public function update(Request $request,$linkid )
    {
        //return $request->all();
        
        $link = link::find($linkid);
      
            if ($request->hasFile('foto')); {
                $file = $request->file('foto');
                $destinoPath ='img/link/';
                $filename = Time() . "-" . $file->getClientOriginalName();
                $uploadSuccess =$request->file('foto')->move($destinoPath, $filename);
                $link->foto =$destinoPath . $filename;
            }
            $link-> url   = $request->url;
           
            $link->save();
       
       return redirect('/admin/link/link');
    }
}
