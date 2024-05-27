<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class PagesController extends Controller
{
    public function index()
    {
        //$trains = Train::all();
        //dd(date('Y-m-d'));
        $trains = Train::where('date', date('Y-m-d'))->get();
        //$trains = Train::where('date', '2024-05-27')->get();

        // !!! non riesco a filtrare per date !!!


        return view('home', compact('trains'));
    }
}
