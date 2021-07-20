<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;
class usersController extends Controller
{
    public function index() {
        $data = Utilisateur::all();
        return view('pages.users',compact('data'));
    }
}
