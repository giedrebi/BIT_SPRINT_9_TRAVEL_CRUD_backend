<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ApiCountryController extends Controller {
    
    public function index() {
        return \App\Models\Country::all();
    }

    public function store(Request $request)
    {
        $newCountry = \App\Models\Country::create([
            'title' => $request->title,
            'season_weather' => $request->season_weather,
        ]);
        if($newCountry){
            return response()->json(["status" => 200]);
        }
    }

    public function update(Request $request, $id)
    {
        $country = \App\Models\Country::find($id);
        $country->title = $request->title;
        $country->season_weather = $request->season_weather;
        if($country -> save()){
            return response()->json(["status" => 200]);
        }
    }
   
    public function show($id) {
        return \App\Models\Country::find($id);
    }

    public function destroy($id){
        return (\App\Models\Country::destroy($id) == 1) ? 
            response()->json(['success' => 'success'], 204) : 
            response()->json(['error' => 'delete not successful'], 500);
    }

}
