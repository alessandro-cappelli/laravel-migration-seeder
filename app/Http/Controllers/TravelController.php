<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Travel;

class TravelController extends Controller
{
    public function index(){
        $listaTravel = Travel::all();
        return view('welcome', compact(`listaTravel`));

    }
}
