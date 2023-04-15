<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Illness;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class IllnessController extends Controller
{
    public function store(Request $request):RedirectResponse{
        $this->validate($request, [
            'name' => 'required',
        ]);
        $illness = new Illness();
        $illness->name = $request->input('name');
        $illness->description = $request->input('description');
        $illness->save();
        return redirect('admin')->with('success', 'Illness added successfully');
    }
}
