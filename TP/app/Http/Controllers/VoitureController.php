<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoitureController extends Controller
{
    //
    public function index()
    {
        return view("Voiture.VoitureIndex");
    }
}
