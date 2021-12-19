<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VentasController extends Controller
{
    //
    public function newSale(){
        return view('ventas.newsale');
    }
}
