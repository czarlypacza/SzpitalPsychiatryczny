<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Illness;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;


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
        $results = [];

        if ($request->has('nazwa') && $request->input('name')) {
            $result = DB::select('call searchIllnesses( ?, ?)', ['Nazwa', $request->name]);
            $temp = $this->mapIllnessResults($result);
            $results[] = $temp;
        }

        if ($request->has('opis') && $request->input('description')) {
            $description = '%' . $request->description . '%';
            $result = DB::select('call searchIllnesses(?, ?)', ['Opis', $description]);
            $temp = $this->mapIllnessResults($result);
            $results[] = $temp;
        }

        // Find common illnesses
        $illnesses = collect($results[0]);
        for ($i = 1; $i < count($results); $i++) {
            $illnesses = $illnesses->intersectByKeys(collect($results[$i]));
        }

        $perPage = 15; // You can change this value as per your requirement.
        $currentPage = Paginator::resolveCurrentPage() ?: 1;
        $items = $illnesses->slice(($currentPage - 1) * $perPage, $perPage)->values();
        $paginatedItems = new LengthAwarePaginator($items, $illnesses->count(), $perPage, $currentPage, ['path' => Paginator::resolveCurrentPath()]);

        return view('admin/illnesses', [
            'Illnesses'=>$illnesses,
            'illnesses' => $paginatedItems
        ]);
    }

    private function mapIllnessResults($result)
    {
        $temp = [];
        foreach ($result as $r) {
            $illness = Illness::where('id', $r->id)->first();
            $temp[$illness->id] = $illness;
        }
        return $temp;
    }


}
