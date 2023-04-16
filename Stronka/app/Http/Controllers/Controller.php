<?php

namespace App\Http\Controllers;

use App\Models\Illness;
use App\Models\Ward;
use App\Models\Doctor;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function admin(){
        return view('admin',['illnesses'=>Illness::all(),'wards'=>Ward::all(),'doctors'=>Doctor::all()]);
    }
}
