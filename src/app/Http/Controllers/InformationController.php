<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;

class InformationController extends Controller
{
    public function index()
    {
        $places = Place::all();

        return view('informations/index', [
            'places' => $places,
        ]);
    }
}
