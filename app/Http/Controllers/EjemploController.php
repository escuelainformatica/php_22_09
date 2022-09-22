<?php

namespace App\Http\Controllers;




use App\Models\Articles;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class EjemploController  extends Controller
{
    public function inicio() {
        $suma=20+30;
        $texto="<script>alert('hola')</script>";
        $codigo="<script>alert('hola')</script>";
        $clave="1222222";

        $articulos=Articles::all();  // select * from articles
        $articulos2 = DB::table('articles')->get();
        //var_dump($articulos);
        //echo "<hr>";
        //var_dump($articulos2);
        //die(1);

        return View::make('vista',[
            'suma'=>$suma,
            'valor'=>$texto,
            'codigo'=>$codigo,
            'articulos'=>$articulos,
            'articulos2'=>$articulos2]
        );
    }

}
