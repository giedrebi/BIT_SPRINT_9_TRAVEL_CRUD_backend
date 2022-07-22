<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiCustomersController extends Controller
{

    public function index()
    {
        $customers = DB::table('customers')
        ->join('towns', 'towns.id', '=', 'customers.town_id')
        ->select('customers.*', 'towns.town_title')
        ->get();
        return $customers;
    }

    public function store(Request $request)
    {
        $newCustomer = \App\Models\Customer::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'phone' => $request->phone,
            'town_id' => $request->town_id
        ]);
        if($newCustomer){
            return response()->json(["status" => 200]);
        }
    }

    // public function edit($id)
    // {
    //     $customers = \App\Models\Customer::find($id);
    //     return response()->json(['status' => 200, 'customers' => $customers]);
    // }

    public function update(Request $request, $id)
    {
        $customers = \App\Models\Customer::find($id);
        $customers->name = $request->name;
        $customers->surname = $request->surname;
        $customers->email = $request->email;
        $customers->phone = $request->phone;
        $customers->town_id = $request->town_id;
        if($customers -> save()){
            return response()->json(["status" => 200]);
        }
    }

    public function show($id) {
        return \App\Models\Customer::find($id);
    }

    public function destroy($id)
    {
        return (\App\Models\Customer::destroy($id) == 1) ?
            response()->json(['success' => 'success'], 204) :
            response()->json(['error' => 'delete not successful'], 500);
    }
}
