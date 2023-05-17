<?php

namespace App\Http\Controllers;

use App\Models\Illness;
use App\Models\Patient;
use Illuminate\Http\Request;
use  App\Models\Doctor;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('patient.index', ['patients' => Patient::all(),'illnesses'=>Illness::all(),'doctors'=>Doctor::all()]);
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
        $this->validate($request, [
            'first_name'=>'required',
            'last_name'=>'required',
            'age'=>'required',
            'phone_number'=>'required',
            'pesel'=>'required',
            'height'=>'required',
            'weight'=>'required',
            'voivodeship'=>'required',
            'city'=>'required',
            'street'=>'required',
            'house_number'=>'required',
            'flat_number'=>'required',
            'postcode'=>'required',
            'doctor_id'=>'required',
        ]);

        DB::insert('exec addPatient ?,?,?,?,?,?,?,?,?,?,?,?,?,?',[$request->first_name, $request->last_name, $request->age, $request->phone_number, $request->pesel, $request->weight, $request->height,$request->doctor_id, $request->voivodeship, $request->city, $request->street, $request->house_number, $request->flat_number, $request->postal_code]);

        return redirect()->route('patients.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patient $patient)
    {
        $this->validate($request, [
            'first_name'=>'required',
            'last_name'=>'required',
            'age'=>'required',
            'phone_number'=>'required',
            'pesel'=>'required',
            'height'=>'required',
            'weight'=>'required',
            'voivodeship'=>'required',
            'city'=>'required',
            'street'=>'required',
            'house_number'=>'required',
            'flat_number'=>'required',
            'postal_code'=>'required',
            'doctor_id'=>'required',
        ]);

        DB::insert('exec updatePatient ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?',[$patient->id,$request->first_name, $request->last_name, $request->age, $request->phone_number, $request->pesel, $request->weight, $request->height,$request->doctor_id, $request->voivodeship, $request->city, $request->street, $request->house_number, $request->flat_number, $request->postal_code]);

        return redirect()->route('patients.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();
        return redirect()->route('patients.index');
    }

    public function filterPatients(Request $request)
    {
        $input = $request->get('filter');

        // Split the input into separate condition-value pairs
        $pairs = explode(";", $input);

        $conditions = [];
        foreach ($pairs as $pair) {
            // Split each pair into condition and value
            $parts = explode(" ", trim($pair), 2);

            if (count($parts) == 2) {
                // Store each condition and value in an associative array
                $conditions[trim($parts[0])] = trim($parts[1]);
            }
        }

        return $conditions;
        //return redirect()->route('patients.show', ['condition' => $condition, 'value' => $value]);
    }

}
