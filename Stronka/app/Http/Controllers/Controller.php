<?php

namespace App\Http\Controllers;

use App\Models\Illness;
use App\Models\Ward;
use App\Models\Doctor;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Models\Patient;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function admin(){

        return view('admin/admin',['illnesses'=>Illness::all(),'wards'=>Ward::all(),'doctors'=>Doctor::all()]);
    }

    public function illness_patient(Request $request){
        DB::table('illness_patient')->insert([
            'illness_id' => $request->illness_id,
            'patient_id' => $request->patient_id,
        ]);
        return redirect()->back();
    }

    public function d_illness_patient(Patient $patient,Illness $illness){
        DB::table('illness_patient')->where([
            'illness_id' => $illness->id,
            'patient_id' => $patient->id,
        ])->delete();
        return redirect()->back();
    }

}
