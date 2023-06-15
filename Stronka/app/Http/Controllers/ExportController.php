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
    public function exportAddresses(Request $request) {
        $data = $request->all();
        array_shift($data);

        $addresses = collect();
        foreach ($data as $key => $value) {
            $result = DB::select('CALL ExportData(?, ?)', ['addresses', $value]);

            $address = Address::where('id', $result[0]->id)->first();
            $addresses->push($address);
        }

        $csvExporter = new Export();
        $csvExporter->build($addresses, ['id', 'voivodeship', 'city', 'street', 'house_number', 'flat_number', 'postal_code', 'created_at', 'updated_at'])->download();
    }

    public function exportIllnesses(Request $request) {
        $data = $request->all();
        array_shift($data);

        $illnesses = collect();
        foreach ($data as $key => $value) {
            $result = DB::select('CALL ExportData(?, ?)', ['illnesses', $value]);

            $illness = Illness::where('id', $result[0]->id)->first();
            $illnesses->push($illness);
        }

        $csvExporter = new Export();
        $csvExporter->build($illnesses, ['id', 'name', 'description'])->download();
    }

    public function exportDoctors(Request $request) {
        $data = $request->all();
        array_shift($data);

        $doctors = collect();
        foreach ($data as $key => $value) {
            $result = DB::select('CALL ExportData(?, ?)', ['doctors', $value]);

            $doctor = Doctor::where('id', $result[0]->id)->first();
            $doctors->push($doctor);
        }

        $csvExporter = new Export();
        $csvExporter->build($doctors, ['id', 'first_name', 'last_name', 'specialization', 'phone_number', 'ward_id', 'created_at', 'updated_at'])->download();
    }

    public function exportWards(Request $request) {
        $data = $request->all();
        array_shift($data);


        $wards = collect();
        foreach ($data as $key => $value) {
            $result = DB::select('CALL ExportData(?, ?)', ['wards', $value]);

            $ward = Ward::where('id', $result[0]->id)->first();
            $wards->push($ward);
        }

        $csvExporter = new Export();
        $csvExporter->build($wards, ['id', 'ward_name'])->download();
    }


    public function exportPatients(Request $request) {
        $data = $request->all();
        array_shift($data);

        $patients = collect();
        foreach ($data as $key => $value) {
            $result = DB::select('CALL ExportData(?,?)', ['patients', $value]);

            // Create a new Patient model for each result
            $patient = Patient::where('id', $result[0]->id)->first();
            // Load the patient's doctor and address
            $patient->load('doctor', 'address', 'illnesses');
            // Add the patient to the collection
            $patients->push($patient);
        }

        $csvExporter = new Export();
        $csvExporter->build($patients, ['id','first_name','last_name','age','phone_number','pesel','weight','height','doctor_id','address_id'])->download();
    }

}
