<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
 public function index() {
     $users = [(object)["ID"=>1,"nom"=>"MadWorker","email"=>"MadWorker@gmail.com","url"=>"img1.jpg"],(object)["ID"=>2,"nom"=>"Els","email"=>"Els@gmail.com","url"=>"img2.jpg"],(object)["ID"=>3,"nom"=>"Majin Bu","email"=>"MajinBu@gmail.com","url"=>"img3.jpg"]];
    return view('users',compact('users'));
}
}
