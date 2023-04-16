<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class WardController extends Controller
{
    public function store(Request $request): RedirectResponse{
        $this->validate($request, [
            'ward_name' => 'required',
        ]);
        DB::insert('exec addWard ?', [$request->input('ward_name')]);

        return redirect('admin');
    }

    public function update(Request $request):RedirectResponse{
        $this->validate($request, [
            'ward_name' => 'required',
        ]);
        DB::update('exec updateWard ?, ?', [$request->input('wardId'), $request->input('ward_name')]);

        return redirect('admin');
    }
    public function destroy($id)
    {
        DB::delete('exec deleteWard ?', [$id]);
        return redirect('admin');
    }
}
