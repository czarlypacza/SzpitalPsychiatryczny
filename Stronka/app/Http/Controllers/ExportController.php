<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Illness;
use App\Models\Address;
use App\Models\Patient;
use App\Models\Ward;
use Illuminate\Http\Request;
use Laracsv\Export;

class ExportController extends Controller
{
    public function exportAddresses() {
        $data = Address::all();//TODO:zrobic procedure ktora bedzie wykonywac export

        $csvExporter = new Export();
        $csvExporter->build($data, ['id', 'voivodeship', 'city', 'street', 'house_number','flat_number', 'postal_code','created_at', 'updated_at'])->download();
    }
    public function exportIllnesses() {
        $data = Illness::all();//TODO:zrobic procedure ktora bedzie wykonywac export

        $csvExporter = new Export();
        $csvExporter->build($data, ['id', 'name', 'description'])->download();
    }
    public function exportDoctors() {
        $data = Doctor::all();//TODO:zrobic procedure ktora bedzie wykonywac export

        $csvExporter = new Export();
        $csvExporter->build($data, ['id','first_name','last_name','specialization','phone_number','ward_id','created_at', 'updated_at'])->download();
    }
    public function exportWards() {
        $data = Ward::all();//TODO:zrobic procedure ktora bedzie wykonywac export

        $csvExporter = new Export();
        $csvExporter->build($data, ['id', 'ward_name'])->download();
    }
    public function exportPatients() {
        $data = Patient::all();//TODO:zrobic procedure ktora bedzie wykonywac export

        $csvExporter = new Export();
        $csvExporter->build($data, ['id','first_name','last_name','age','phone_number','pesel','weight','height','doctor_id','address_id','created_at', 'updated_at'])->download();
    }
}
