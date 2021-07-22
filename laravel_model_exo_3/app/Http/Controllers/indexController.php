<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membre;
class indexController extends Controller
{
    public function index() {
        $dataSect_i1 = Membre::where('genre','Homme')->count();
        $dataSect_i2 = Membre::where('genre','Femme')->count(); 
        $dataSect2 = Membre::where('genre','Homme')->get(); 
        $dataSect3 = Membre::where('genre','Femme')->get(); 
        $dataSect4 = Membre::where('genre','Homme')
        ->whereBetween('age',[18,25])
        ->get(); 
        $dataSect5 = Membre::where('genre','Femme')
        ->whereBetween('age',[18,25])
        ->get(); 
        $dataSect6 = Membre::
whereNotBetween('age',[18,25])
        ->get(); 
    return view('template.index',compact('dataSect_i1','dataSect_i2','dataSect2','dataSect3','dataSect4','dataSect5','dataSect6'));
}
}
