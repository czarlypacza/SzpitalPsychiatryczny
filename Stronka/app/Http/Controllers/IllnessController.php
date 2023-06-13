<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Illness;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class IllnessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin/illnesses', [
            'illnesses'=>Illness::paginate(15)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function store(Request $request):RedirectResponse{
        $this->validate($request, [
            'name' => 'required',
        ]);
        DB::insert('call addIllness(?, ?)', [$request->input('name'), $request->input('description')]);

        return redirect('illnesses');
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

    public function update(Request $request):RedirectResponse{
        $this->validate($request, [
            'name' => 'required',
        ]);
        DB::update('call updateIllness(?, ?, ?)', [$request->input('id'), $request->input('name'), $request->input('description')]);

        return redirect('illnesses');
    }

    public function destroy(Illness $illness)
    {
        Illness::destroy($illness->id);
        return redirect('illnesses');
    }
    public function filterIllnesses(Request $request)
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

        $results = [];

        // Iterate over each condition-value pair
        foreach ($conditions as $condition => $value) {
            // Execute the stored procedure for each condition
            $result = DB::select('exec searchIllnesses ?,?', [$condition, $value]);

            // Map over the results to create new Eloquent models
            $temp = [];
            foreach ($result as $r) {
                // Create a new Doctor model for each result
                $illness = Illness::where('id', $r->id)->first();

                // Store each doctor in the results array
                $temp[$illness->id] = $illness;
            }
            // Push to results array
            $results[] = $temp;
        }

        // Find common doctors
        $illnesses = collect($results[0]);
        for ($i = 1; $i < count($results); $i++) {
            $illnesses = $illnesses->intersectByKeys(collect($results[$i]));
        }

        return view('admin/illnesses', [
            'illnesses' => $illnesses
        ]);
    }

}
