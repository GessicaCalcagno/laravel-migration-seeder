<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){
        $today = Carbon::today();
        $trains = Train::where('orario_di_partenza', '>=', $today->format('H:i:s'))
        ->get();
        dd($trains);
        return view('trains.index', compact('trains'));
    }
}
