<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ApiTownController extends Controller
{
    public function index()
    {
        $towns = DB::table('towns')
        ->join('countries', 'countries.id', '=', 'towns.country_id')
        ->select('towns.*', 'countries.title')
        ->get();
        return $towns;
    }

    public function store(Request $request)
    {
        $newTown = \App\Models\Town::create([
            'town_title' => $request->town_title,
            'distance' => $request->distance,
            'days' => $request->days,
            'price' => $request->price,
            'country_id' => $request->country_id,
            
        ]);
        if($newTown){
            return response()->json(["status" => 200]);
        }
    }

    public function update(Request $request, $id)
    {
        $town = \App\Models\Town::find($id);
        $town->town_title = $request->town_title;
        $town->distance = $request->distance;
        $town->days = $request->days;
        $town->price = $request->price;
        $town->country_id = $request->country_id;
        if($town -> save()){
            return response()->json(["status" => 200]);
        }
    }
    
    public function show($id) {
        return \App\Models\Town::find($id);
    }

    public function destroy($id)
    {   
        return (\App\Models\Town::destroy($id) == 1) 
        ? response()->json(['success' => 'success'], 204) 
        : response()->json(['error' => 'delete not successful'], 500);
    }
}
