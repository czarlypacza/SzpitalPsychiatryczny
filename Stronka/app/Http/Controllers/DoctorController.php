<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Ward;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        Doctor::destroy($doctor->id);
        return redirect('doctors');
    }
}
