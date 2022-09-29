<?php

namespace App\Http\Controllers;

use App\Models\noticia;
use Illuminate\Http\Request;

class NotisingleController extends Controller
{
    public function single($noteid){

        $noti = noticia::all();

        $noteid = noticia::find($noteid);



        return view('/single',['note'=>$noteid,'noti'=>$noti]);
       }
}
