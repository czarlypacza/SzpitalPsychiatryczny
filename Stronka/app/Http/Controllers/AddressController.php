<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('address.index',['addresses'=>Address::paginate(15)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Address::insert([
            'voivodeship'=>$request->voivodeship,
            'city'=>$request->city,
            'street'=>$request->street,
            'house_number'=>$request->house_number,
            'flat_number'=>$request->flat_number,
            'postal_code'=>$request->postal_code,
            ]);

        return redirect()->route('address.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Address $address)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Address $address)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Address $address)
    {
        $address->find($request->e_id)->update([
            'voivodeship'=>$request->e_voivodeship,
            'city'=>$request->e_city,
            'street'=>$request->e_street,
            'house_number'=>$request->e_house_number,
            'flat_number'=>$request->e_flat_number,
            'postal_code'=>$request->e_postal_code,
        ]);
            //$request->all());
        return redirect()->route('address.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Address $address)
    {
        Address::destroy($address->id);
        return redirect()->route('address.index');
    }

    public function filterAddresses(Request $request)
    {
        $input = $request->get('filter');

        // Split the input into separate condition-value pairs
        $pairs = explode(";", $input);

        $conditions = [];
        foreach ($pairs as $pair) {
            // Split each pair into condition and value
            $parts = explode(":", trim($pair), 2);

            if (count($parts) == 2) {
                // Store each condition and value in an associative array
                $conditions[trim($parts[0])] = trim($parts[1]);
            }
        }

        $results = [];

        // Iterate over each condition-value pair
        foreach ($conditions as $condition => $value) {
            // Execute the stored procedure for each condition
            $result = DB::select('exec searchAddresses ?,?',[$condition, $value]);

            // Map over the results to create new Eloquent models
            $temp = [];
            foreach ($result as $r) {
                // Create a new Doctor model for each result
                $address = Address::where('id', $r->id)->first();


                // Store each doctor in the results array
                $temp[$address->id] = $address;
            }
            // Push to results array
            $results[] = $temp;
        }

        // Find common doctors
        $addresses = collect($results[0]);
        for ($i=1; $i<count($results); $i++) {
            $addresses = $addresses->intersectByKeys(collect($results[$i]));
        }


        $perPage = 15; // You can change this value as per your requirement.
        $currentPage = Paginator::resolveCurrentPage() ?: 1;
        $items = $addresses->slice(($currentPage - 1) * $perPage, $perPage)->values();
        $paginatedItems = new LengthAwarePaginator($items, $addresses->count(), $perPage, $currentPage, ['path' => Paginator::resolveCurrentPath()]);

        return view('address.index', ['addresses' => $paginatedItems]);
        //return $conditions;
    }

}
