<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Illness;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class IllnessController extends Controller
{
    public function store(Request $request):RedirectResponse{
        $this->validate($request, [
            'name' => 'required',
        ]);
        DB::insert('exec addIllness ?, ?', [$request->input('name'), $request->input('description')]);

        return redirect('admin');
    }

    public function destroy($id)
    {
        Illness::destroy($id);
        return redirect('admin');
    }


}
