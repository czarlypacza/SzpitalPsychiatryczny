<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Ward;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class DoctorController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin/doctors',[
            'Doctors'=>Doctor::all(),
            'doctors'=>Doctor::paginate(15),
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


        DB::insert('call addDoctor( ?, ?, ?, ?, ?)', [$request->input('d_first_name'), $request->input('d_last_name'), $request->input('d_specialization'), $request->input('d_tel'), $request->input('d_ward')]);
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
    public function update(Request $request,Doctor $doctor)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            // 'specialization' => 'required',
            // 'tel' => 'required',
            // 'ward' => 'required',
        ]);


        $doctor->update($request->all());
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
        $results = [];

        if ($request->has('imie') && $request->input('first_name')) {
            $result = DB::select('call searchDoctors (?,?)', ['Imie', $request->first_name]);
            $temp = $this->mapDoctorResults($result);
            $results[] = $temp;
        }

        if ($request->has('nazwisko') && $request->input('last_name')) {
            $result = DB::select('call searchDoctors (?,?)', ['Nazwisko', $request->last_name]);
            $temp = $this->mapDoctorResults($result);
            $results[] = $temp;
        }

        if ($request->has('specjalizacja') && $request->input('specialization')) {
            $result = DB::select('call searchDoctors (?,?)', ['Specjalizacja', $request->specialization]);
            $temp = $this->mapDoctorResults($result);
            $results[] = $temp;
        }

        if ($request->has('telefon') && $request->input('phone_number')) {
            $result = DB::select('call searchDoctors (?,?)', ['Tel', $request->phone_number]);
            $temp = $this->mapDoctorResults($result);
            $results[] = $temp;
        }

        if ($request->has('oddzial') && $request->input('ward_name')) {
            $result = DB::select('call searchDoctors (?,?)', ['Oddzial', $request->ward_name]);
            $temp = $this->mapDoctorResults($result);
            $results[] = $temp;
        }

        $doctors = collect($results[0]);
        for ($i = 1; $i < count($results); $i++) {
            $doctors = $doctors->intersectByKeys(collect($results[$i]));
        }

        $perPage = 15; // Change this value according to your requirement
        $currentPage = Paginator::resolveCurrentPage() ?: 1;
        $items = $doctors->slice(($currentPage - 1) * $perPage, $perPage)->values();
        $paginatedItems = new LengthAwarePaginator($items, $doctors->count(), $perPage, $currentPage, ['path' => Paginator::resolveCurrentPath()]);

        return view('admin/doctors',[
            'Doctors' => $doctors,
            'doctors' => $paginatedItems,
            'wards' => Ward::all()
        ]);


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
            $result = DB::select('call searchDoctors(?,?)',[$condition, $value]);

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
        }*/

        /*return view('admin/doctors',[
            'doctors'=>$doctors,
            'wards'=>Ward::all()
        ]);*/
    }
    private function mapDoctorResults($result)
    {
        $temp = [];
        foreach ($result as $r) {
            // Create a new Doctor model for each result
            $doctor = Doctor::where('id', $r->id)->first();

            // Load the doctor's ward
            $doctor->load('ward');

            // Store each doctor in the results array
            $temp[$doctor->id] = $doctor;
        }
        return $temp;
    }

}
