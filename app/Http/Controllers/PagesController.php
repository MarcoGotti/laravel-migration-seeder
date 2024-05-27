<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class PagesController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        //$trains = Train::where('date', now())->get();
        //$trains = Train::where('date', '2024 - 05 - 27')->get();

        // !!! non riesco a filtrare per date !!!


        return view('home', compact('trains'));
    }
}
