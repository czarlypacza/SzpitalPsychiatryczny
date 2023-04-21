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
            'illnesses'=>Illness::all()
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
        DB::insert('exec addIllness ?, ?', [$request->input('name'), $request->input('description')]);

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
        DB::update('exec updateIllness ?, ?, ?', [$request->input('id'), $request->input('name'), $request->input('description')]);


        return redirect('illnesses');
    }

    public function destroy($id)
    {
        Illness::destroy($id);
        return redirect('illnesses');
    }

}
