<?php

namespace App\Http\Controllers;

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
            'doctors'=>Doctor::all()
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
    public function destroy($id)
    {
        DB::delete('exec deleteWard ?', [$id]);
        return redirect('wards');
    }
}
