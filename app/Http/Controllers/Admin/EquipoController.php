<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
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
        $equipo = equipo::all();//
        return view('/admin/equipo/equipo',['equipo' =>$equipo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear(Request $request)
    {
        $equipo=new equipo;
        
            if ($request->hasFile('foto')); {

                $file = $request->file('foto');
                $destinoPath ='img/link/';
                $filename = Time() . "-" . $file->getClientOriginalName();
                $uploadSuccess =$request->file('foto')->move($destinoPath, $filename);
                $equipo->foto =$destinoPath . $filename;
            }
                $equipo-> nombre   = $request->nombre;
                $equipo-> cargo       = $request->cargo;
                $equipo-> descripcion       = $request->descripcion;
            
                $equipo->save();
                return back()->with('mensaje','Contenido Agregado');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($linkid)
    {
        $note=equipo::findOrfail($linkid);
    //return $note;
    //dd($note);
    return view('/admin/equipo/editar',compact('note'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $equipoid)
    {
        //return $request->all();
        
        $equipo = equipo::find($equipoid);
      
            if ($request->hasFile('foto')); {
                $file = $request->file('foto');
                $destinoPath ='img/link/';
                $filename = Time() . "-" . $file->getClientOriginalName();
                $uploadSuccess =$request->file('foto')->move($destinoPath, $filename);
                $equipo->foto =$destinoPath . $filename;
            }
            
           
            $equipo->save();
       
       return redirect('/admin/equipo/equipo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request,$equipoid)
    {
        //dd($parnetid);
        $par = equipo::find($equipoid);
        $par-> foto         = $request->foto;
        $par-> nombre          = $request->nombre;
        $par-> cargo          = $request->cargo;
        $par-> descripcion      = $request->descripcion;
        
        $par->delete();
     return back()->with('mensaje','Noticia  Eliminada');
          //return view('/admin/parnets') 
    }
}
