<?php

namespace App\Http\Controllers;

use App\Models\Illness;
use App\Models\Patient;
use App\Models\Ward;
use Illuminate\Http\Request;
use  App\Models\Doctor;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Psy\Readline\Hoa\Console;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('patient.index', ['Patients'=>Patient::all(),'patients' => Patient::paginate(15),'illnesses'=>Illness::all(),'doctors'=>Doctor::all(),'wards'=>Ward::all()]);
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
            'postal_code'=>'required',
            'doctor_id'=>'required',
        ]);

        //DB::insert('exec addPatient ?,?,?,?,?,?,?,?,?,?,?,?,?,?',[$request->first_name, $request->last_name, $request->age, $request->phone_number, $request->pesel, $request->weight, $request->height,$request->doctor_id, $request->voivodeship, $request->city, $request->street, $request->house_number, $request->flat_number, $request->postal_code]);

        DB::insert('call addPatient( ?,?,?,?,?,?,?,?,?,?,?,?,?,?)',[$request->first_name, $request->last_name, $request->age, $request->phone_number, $request->pesel, $request->weight, $request->height,$request->doctor_id, $request->voivodeship, $request->city, $request->street, $request->house_number, $request->flat_number, $request->postal_code]);


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

        //DB::insert('exec updatePatient ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?',[$patient->id,$request->first_name, $request->last_name, $request->age, $request->phone_number, $request->pesel, $request->weight, $request->height,$request->doctor_id, $request->voivodeship, $request->city, $request->street, $request->house_number, $request->flat_number, $request->postal_code]);

        DB::insert('call updatePatient (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',[$patient->id,$request->first_name, $request->last_name, $request->age, $request->phone_number, $request->pesel, $request->weight, $request->height,$request->doctor_id, $request->voivodeship, $request->city, $request->street, $request->house_number, $request->flat_number, $request->postal_code]);


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
        $results = [];

        if ($request->has('imie')) {
            $result = DB::select('call searchPatients (?,?)', ['Imie', $request->first_name]);
            $temp = [];
            foreach ($result as $r) {
                // Create a new Patient model for each result
                $patient = Patient::where('id', $r->id)->first();
                // Load the patient's doctor and address
                $patient->load('doctor', 'address');
                // Store each patient in the results array
                $temp[$patient->id] = $patient;
            }
            // Push to results array
            $results[] = $temp;
        }

        if ($request->has('nazwisko')) {
            $result = DB::select('call searchPatients (?,?)', ['Nazwisko', $request->last_name]);
            $temp = [];
            foreach ($result as $r) {
                // Create a new Patient model for each result
                $patient = Patient::where('id', $r->id)->first();
                // Load the patient's doctor and address
                $patient->load('doctor', 'address');
                // Store each patient in the results array
                $temp[$patient->id] = $patient;
            }
            // Push to results array
            $results[] = $temp;
        }
        if ($request->has('telefon')) {
            $result = DB::select('call searchPatients (?,?)', ['Tel', $request->phone_number]);
            $temp = [];
            foreach ($result as $r) {
                // Create a new Patient model for each result
                $patient = Patient::where('id', $r->id)->first();
                // Load the patient's doctor and address
                $patient->load('doctor', 'address');
                // Store each patient in the results array
                $temp[$patient->id] = $patient;
            }
            // Push to results array
            $results[] = $temp;
        }
        if ($request->has('pesel')) {
            $result = DB::select('call searchPatients (?,?)', ['PESEL', $request->PESEL]);
            $temp = [];
            foreach ($result as $r) {
                // Create a new Patient model for each result
                $patient = Patient::where('id', $r->id)->first();
                // Load the patient's doctor and address
                $patient->load('doctor', 'address');
                // Store each patient in the results array
                $temp[$patient->id] = $patient;
            }
            // Push to results array
            $results[] = $temp;
        }

        if ($request->has('waga')) {
            $result = DB::select('call searchPatients (?,?)', ['Waga', $request->weight]);
            $temp = [];
            foreach ($result as $r) {
                // Create a new Patient model for each result
                $patient = Patient::where('id', $r->id)->first();
                // Load the patient's doctor and address
                $patient->load('doctor', 'address');
                // Store each patient in the results array
                $temp[$patient->id] = $patient;
            }
            // Push to results array
            $results[] = $temp;
        }
        if ($request->has('wzrost')) {
            $result = DB::select('call searchPatients (?,?)', ['Wzrost', $request->height]);
            $temp = [];
            foreach ($result as $r) {
                // Create a new Patient model for each result
                $patient = Patient::where('id', $r->id)->first();
                // Load the patient's doctor and address
                $patient->load('doctor', 'address');
                // Store each patient in the results array
                $temp[$patient->id] = $patient;
            }
            // Push to results array
            $results[] = $temp;
        }
        if ($request->has('oddzial')){
            $result = DB::select('call searchPatients(?,?)', ['Oddzial',$request->ward_id]);

            $temp = [];
            foreach ($result as $r) {
                // Create a new Patient model for each result
                $patient = Patient::where('id', $r->id)->first();
                // Load the patient's doctor and address
                $patient->load('doctor', 'address');
                // Store each patient in the results array
                $temp[$patient->id] = $patient;
            }


            // Push to results array
            $results[] = $temp;
        }

        if ($request->has('doktor')) {
            $result = DB::select('call searchPatients (?,?)', ['Doktor', $request->doctor]);
            $temp = [];
            foreach ($result as $r) {
                // Create a new Patient model for each result
                $patient = Patient::where('id', $r->id)->first();
                // Load the patient's doctor and address
                $patient->load('doctor', 'address');
                // Store each patient in the results array
                $temp[$patient->id] = $patient;
            }
            // Push to results array
            $results[] = $temp;
        }

        if ($request->has('wojewodztwo')) {
            $result = DB::select('call searchPatients (?,?)', ['Wojewodztwo', $request->voivodeship]);
            $temp = [];
            foreach ($result as $r) {
                // Create a new Patient model for each result
                $patient = Patient::where('id', $r->id)->first();
                // Load the patient's doctor and address
                $patient->load('doctor', 'address');
                // Store each patient in the results array
                $temp[$patient->id] = $patient;
            }
            // Push to results array
            $results[] = $temp;
        }
        if ($request->has('miasto')) {
            $result = DB::select('call searchPatients (?,?)', ['Miasto', $request->city]);
            $temp = [];
            foreach ($result as $r) {
                // Create a new Patient model for each result
                $patient = Patient::where('id', $r->id)->first();
                // Load the patient's doctor and address
                $patient->load('doctor', 'address');
                // Store each patient in the results array
                $temp[$patient->id] = $patient;
            }
            // Push to results array
            $results[] = $temp;
        }

        if ($request->has('ulica')) {
            $result = DB::select('call searchPatients (?,?)', ['Ulica', $request->street]);
            $temp = [];
            foreach ($result as $r) {
                // Create a new Patient model for each result
                $patient = Patient::where('id', $r->id)->first();
                // Load the patient's doctor and address
                $patient->load('doctor', 'address');
                // Store each patient in the results array
                $temp[$patient->id] = $patient;
            }
            // Push to results array
            $results[] = $temp;
        }
        if ($request->has('numer')) {
            $result = DB::select('call searchPatients (?,?)', ['Numer', $request->house_number]);
            $temp = [];
            foreach ($result as $r) {
                // Create a new Patient model for each result
                $patient = Patient::where('id', $r->id)->first();
                // Load the patient's doctor and address
                $patient->load('doctor', 'address');
                // Store each patient in the results array
                $temp[$patient->id] = $patient;
            }
            // Push to results array
            $results[] = $temp;
        }
        if ($request->has('mieszkania')) {
            $result = DB::select('call searchPatients (?,?)', ['NumerMieszkania', $request->flat_number]);
            $temp = [];
            foreach ($result as $r) {
                // Create a new Patient model for each result
                $patient = Patient::where('id', $r->id)->first();
                // Load the patient's doctor and address
                $patient->load('doctor', 'address');
                // Store each patient in the results array
                $temp[$patient->id] = $patient;
            }
            // Push to results array
            $results[] = $temp;
        }

        if ($results == []) {
            return redirect()->route('patients.index')->with('error', 'Brak wynikÓw');
        }
        // Find common patients
        $patients = collect($results[0]);
        for ($i = 1; $i < count($results); $i++) {
            $patients = $patients->intersectByKeys(collect($results[$i]));
        }
        $perPage = 15; // You can change this value as per your requirement.
        $currentPage = Paginator::resolveCurrentPage() ?: 1;
        $items = $patients->slice(($currentPage - 1) * $perPage, $perPage)->values();
        $paginatedItems = new LengthAwarePaginator($items, $patients->count(), $perPage, $currentPage, ['path' => Paginator::resolveCurrentPath()]);
        return view('patient.index', ['Patients' => $patients, 'patients' => $paginatedItems, 'illnesses' => Illness::all(), 'doctors' => Doctor::all(),'wards'=>Ward::all()]);
    }
        //return $patients;




        /*$input = $request->get('filter');
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
            $result = DB::select('exec searchPatients ?,?',[$condition, $value]);
            //$result = DB::select('call searchPatients ?,?',[$condition, $value]);
            // Map over the results to create new Eloquent models
            $temp = [];
            foreach ($result as $r) {
                // Create a new Patient model for each result
                $patient = Patient::where('id', $r->id)->first();
                // Load the patient's doctor and address
                $patient->load('doctor', 'address');
                // Store each patient in the results array
                $temp[$patient->id] = $patient;
            }
            // Push to results array
            $results[] = $temp;
        }
        // Find common patients
        $patients = collect($results[0]);
        for ($i=1; $i<count($results); $i++) {
            $patients = $patients->intersectByKeys(collect($results[$i]));
        }
        $perPage = 15; // You can change this value as per your requirement.
        $currentPage = Paginator::resolveCurrentPage() ?: 1;
        $items = $patients->slice(($currentPage - 1) * $perPage, $perPage)->values();
        $paginatedItems = new LengthAwarePaginator($items, $patients->count(), $perPage, $currentPage, ['path' => Paginator::resolveCurrentPath()]);
        return view('patient.index', ['patients' => $paginatedItems ,'illnesses'=>Illness::all(),'doctors'=>Doctor::all()]);*/
        //return $request;
    //}



}
