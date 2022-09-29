<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\noticia;
use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $noticia = noticia::all();
        return view('/admin/new/noticia',['noticia' =>$noticia]);

    }

    public function crear(Request $request )
    {

        $registro = new noticia;

        if ($request->hasFile('foto')); {

            $file = $request->file('foto');
            $destinoPath ='img/noticia/';
            $filename = Time() . "-" . $file->getClientOriginalName();
            $uploadSuccess =$request->file('foto')->move($destinoPath, $filename);
            $registro->foto =$destinoPath . $filename;
        }
            $registro-> titulo   = $request->titulo;
            $registro-> extracto = $request->extracto;
            $registro-> contenido = $request->contenido;
            $registro-> created_at = $request->created_at;

            $registro->save();

     return back()->with('mensaje','Noticia Creada');

       //return view('/admin/parnets')
    }


    public function edit($parnetid)
    {
    $note=noticia::findOrfail($parnetid);

   // dd($note);

    return view('/admin/new/editar',compact('note'));
    }

    public function update(Request $request,$parnetid )
    {
        //return $request->all();
        $par = noticia::find($parnetid);
        if ($request->hasFile('foto')); {
            $file = $request->file('foto');
            $destinoPath ='img/noticia/';
            $filename = Time() . "-" . $file->getClientOriginalName();
            $uploadSuccess =$request->file('foto')->move($destinoPath, $filename);
            $par->foto =$destinoPath . $filename;
        }
        $par-> titulo           = $request->titulo;
        $par-> extracto        = $request->extracto;
        $par-> contenido        = $request->contenido;
        $par-> created_at       = $request->created_at;
       $par->save();
     //return back()->with('mensaje','Noticia Actualizado');
     return redirect('/admin/new/noticia');
    }

    public function delete(Request $request,$parnetid )
    {
        //dd($parnetid);
        $par = noticia::find($parnetid);
        $par-> foto         = $request->foto;
        $par-> titulo          = $request->titulo;
        $par-> extracto        = $request->extracto;
        $par-> contenido      = $request->contenido;
        $par-> created_at     = $request->created_at;
        $par->delete();
     return back()->with('mensaje','Noticia  Eliminada');
          //return view('/admin/parnets')
    }




}
