<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Illness;
use App\Models\Address;
use App\Models\Patient;
use App\Models\Ward;
use Illuminate\Http\Request;
use Laracsv\Export;
use Illuminate\Support\Facades\DB;

class ExportController extends Controller
{
    public function exportAddresses() {
        $data = DB::select('EXEC ExportData ?',['addresses']);

        $data= collect($data);

        $csvExporter = new Export();
        $csvExporter->build($data, ['id', 'voivodeship', 'city', 'street', 'house_number','flat_number', 'postal_code','created_at', 'updated_at'])->download();
    }
    public function exportIllnesses() {
        $data = DB::select('EXEC ExportData ?',['illnesses']);

        $data= collect($data);

        $csvExporter = new Export();
        $csvExporter->build($data, ['id', 'name', 'description'])->download();
    }
    public function exportDoctors() {
        $data = DB::select('EXEC ExportData ?',['doctors']);

        $data= collect($data);

        $csvExporter = new Export();
        $csvExporter->build($data, ['id','first_name','last_name','specialization','phone_number','ward_id','created_at', 'updated_at'])->download();
    }
    public function exportWards() {
        $data = DB::select('EXEC ExportData ?',['wards']);

        $data= collect($data);

        $csvExporter = new Export();
        $csvExporter->build($data, ['id', 'ward_name'])->download();
    }
    public function exportPatients(Request $request) {
        $data = $request->all();
        array_shift($data);
        $patients = [];
        foreach ($data as $key => $value){
            //$patients = Patient::where('id',$value)->get();
            array_push($patients ,Patient::where('id',$value)->first());
        }
        //return $patients;
        $patients= collect($patients);

        $csvExporter = new Export();
        $csvExporter->build($patients, ['id','first_name','last_name','age','phone_number','pesel','weight','height','doctor_id','address_id','created_at', 'updated_at'])->download();

    }
}
