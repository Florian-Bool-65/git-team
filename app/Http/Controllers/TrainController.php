<?php

namespace App\Http\Controllers;
use App\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    function  index () {
       $trains= Train::all();
        return view('trains', compact("trains"));
    }
}
