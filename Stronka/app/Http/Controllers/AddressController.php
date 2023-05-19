<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

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
}
