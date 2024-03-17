<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Illuminate\Support\Carbon;



class HomeController extends Controller
{
    public function index()
    {
        $today = Carbon::today()->toDateString();
        $trains = Train::all();
        $todays_trains = Train::where('dep_date', '=', $today)->get();
        return view('home', compact('trains', 'todays_trains'));
    }
}
