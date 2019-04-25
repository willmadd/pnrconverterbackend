<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AirlineModel;

class AirlineController extends Controller
{
    public function airline(){
        return response()->json(AirlineModel::get(),200);
    }

    public function singleAirline($iatacode){
        return response()->json(AirlineModel::where('iatacode', strtoupper($iatacode))->first(),200);
    }

    public function gdsAirline(Request $request){
        
        return response()->json($request->all('gds'));
    }

}
