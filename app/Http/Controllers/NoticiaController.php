<?php

namespace App\Http\Controllers;

use App\Models\noticia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NoticiaController extends Controller
{
   public function noticias(){

     // $note=noticia::all();
      $noticias=DB::table('noticias')
        ->orderBy('id','desc')
        ->paginate(9);

    return view('/noticias',compact('noticias'));
   }

}
