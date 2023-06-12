<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Ward;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Illness;
use App\Models\Doctor;

class WardController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin/wards', [
            'wards' => Ward::all(),
            'illnesses'=>Illness::all(),
            'doctors'=>Doctor::all(),
            'patients'=>Patient::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function store(Request $request): RedirectResponse{
        $this->validate($request, [
            'ward_name' => 'required',
        ]);
        DB::insert('exec addWard ?', [$request->input('ward_name')]);

        return redirect('wards');
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
            'ward_name' => 'required',
        ]);
        DB::update('exec updateWard ?, ?', [$request->input('wardId'), $request->input('ward_name')]);

        return redirect('wards');
    }
    public function destroy(Ward $ward)
    {
        DB::delete('exec deleteWard ?', [$ward->id]);
        return redirect('wards');
    }

    public function filterWards(Request $request)
    {
        $wards=[];
        if ($request->has('oddzial')){
            $wards = Ward::where('ward_name', $request->input('ward_name'))->get();
        }

        if ($wards == []){
            return view('admin/wards', [
                'wards' => Ward::all(),
                'illnesses'=>Illness::all(),
                'doctors'=>Doctor::all(),
                'patients'=>Patient::all()
            ]);
        }else{
            return view('admin/wards', [
                'wards' => $wards,
                'illnesses'=>Illness::all(),
                'doctors'=>Doctor::all(),
                'patients'=>Patient::all()
            ]);
        }




//        $input = $request->get('filter');
//
//        // Split the input into separate ward names
//        $names = explode(",", $input);
//
//        $wards = collect();
//
//        // Iterate over each name
//        foreach ($names as $name) {
//            // Execute the stored procedure for each name
//            $results = DB::select('exec searchWards ?', [trim($name)]);
//
//            // Map over the results to create new Eloquent models
//            foreach ($results as $result) {
//                // Create a new Ward model for each result
//                $ward = Ward::where('id', $result->id)->first();
//
//                // Push the ward to the wards collection
//                $wards->push($ward);
//            }
//        }
//        return view('admin/wards', [
//            'wards' => $wards,
//            'illnesses'=>Illness::all(),
//            'doctors'=>Doctor::all(),
//            'patients'=>Patient::all()
//        ]);

    }

}
