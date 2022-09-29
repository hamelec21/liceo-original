<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\especialidad;
use Illuminate\Http\Request;


class EspecialidadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index(){

        $espe = especialidad::all();//
        return view('/admin/especialidad/especialidad',['espe' =>$espe]);

    }

    public function crear(Request $request)
    {

        $especialidad = new especialidad;
        
        if ($request->hasFile('foto')); {

            $file = $request->file('foto');
            $destinoPath ='img/espe/';
            $filename = Time() . "-" . $file->getClientOriginalName();
            $uploadSuccess =$request->file('foto')->move($destinoPath, $filename);
            $especialidad->foto =$destinoPath . $filename;
        }
            $especialidad-> nombre   = $request->nombre;
            $especialidad-> extracto   = $request->extracto;
            $especialidad-> descripcion       = $request->descripcion;
            $especialidad-> url       = $request->url;
            $especialidad->save();
            return back()->with('mensaje','Contenido Agregado');

    }

    public function edit($id)
    {
        $note=especialidad::findOrfail($id);
    //return $note;
    //dd($note);
    return view('/admin/especialidad/editar',compact('note'));
    }

    public function update(Request $request, $id)
    {
        //return $request->all();
        
        $especialida = especialidad::find($id);
      
            if ($request->hasFile('foto')); {
                $file = $request->file('foto');
                $destinoPath ='img/espe/';
                $filename = Time() . "-" . $file->getClientOriginalName();
                $uploadSuccess =$request->file('foto')->move($destinoPath, $filename);
                $especialida->foto =$destinoPath . $filename;
            }

            $especialida->     nombre          = $request->nombre;
            $especialida->     extracto          = $request->extracto;
            $especialida->     descripcion     = $request->descripcion;
            $especialida->     url     = $request->url;
           
            $especialida->save();
       
       return redirect('/admin/especialidad/especialidad');
    }

    public function delete(Request $request,$id)
    {
        //dd($parnetid);
        $par = especialidad::find($id);
        $par-> foto         = $request->foto;
        $par-> nombre          = $request->nombre;
        $par-> extracto         = $request->extracto;
        $par-> descripcion      = $request->descripcion;
        $par-> url      = $request->url;
        
        $par->delete();
     return back()->with('mensaje','Noticia  Eliminada');
          //return view('/admin/parnets') 
    }







}
