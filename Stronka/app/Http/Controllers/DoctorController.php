<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Ward;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class DoctorController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin/doctors',[
            'doctors'=>Doctor::all(),
            'wards'=>Ward::all()
        ]);
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
    public function store(Request $request):RedirectResponse
    {

        $this->validate($request, [
            'd_first_name' => 'required',
            'd_last_name' => 'required',
            'd_specialization' => 'required',
            'd_tel' => 'required',
        ]);


        DB::insert('exec addDoctor ?, ?, ?, ?, ?', [$request->input('d_first_name'), $request->input('d_last_name'), $request->input('d_specialization'), $request->input('d_tel'), $request->input('d_ward')]);
        return redirect('doctors');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doctor $doctor)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            // 'specialization' => 'required',
            // 'tel' => 'required',
            // 'ward' => 'required',
        ]);

        $doctor->find($request->id)->update($request->all());
        //$doctor->update($request->all());
        return redirect('doctors');
        //return $request;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        Doctor::destroy($doctor->id);
        return redirect('doctors');
    }

    public function filterDoctors(Request $request)
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
            $result = DB::select('exec searchDoctors ?,?',[$condition, $value]);

            // Map over the results to create new Eloquent models
            $temp = [];
            foreach ($result as $r) {
                // Create a new Doctor model for each result
                $doctor = Doctor::where('id', $r->id)->first();

                // Load the doctor's ward
                $doctor->load('ward');

                // Store each doctor in the results array
                $temp[$doctor->id] = $doctor;
            }
            // Push to results array
            $results[] = $temp;
        }

        // Find common doctors
        $doctors = collect($results[0]);
        for ($i=1; $i<count($results); $i++) {
            $doctors = $doctors->intersectByKeys(collect($results[$i]));
        }

        return view('admin/doctors',[
            'doctors'=>$doctors,
            'wards'=>Ward::all()
        ]);
    }


}
