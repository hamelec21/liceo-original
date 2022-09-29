<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class ContaactoController extends Controller
{
    public function index()
    {
        return view('/contactanos.index');
    }

    public function store(Request $request)
    {
        $correo = new ContactanosMailable($request->all());

    mail::to('lchagres2011@gmail.com')->send($correo);

    return redirect()->route('contactanos.index')->with('info','Mensaje Enviado');
    }
}
