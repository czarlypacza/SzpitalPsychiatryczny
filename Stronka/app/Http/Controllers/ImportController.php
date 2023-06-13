<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImportController extends Controller
{
    public function importPatients(Request $request)
    {
        $file = $request->file('csv_file');

        if (($handle = fopen($file, 'r')) !== false) {
            while (($data = fgetcsv($handle, 1000, ',')) !== false) {
                $first_name = $data[0];
                $last_name = $data[1];
                $age = $data[2];
                $phone_number = $data[3];
                $pesel = $data[4];
                $weight = $data[5];
                $height = $data[6];
                $doctor_id = $data[7];
                $address_id = $data[8];

                DB::statement("CALL importPatient(?, ?, ?, ?, ?, ?, ?, ?, ?)",
                    [$first_name, $last_name, $age, $phone_number, $pesel, $weight, $height, $doctor_id, $address_id]);
            }

            fclose($handle);
        }

        return redirect()->route('patients.index');
    }

    public function importIllnesses(Request $request)
    {
        $file = $request->file('csv_file');

        if (($handle = fopen($file, 'r')) !== false) {
            while (($data = fgetcsv($handle, 1000, ',')) !== false) {
                $in_name = $data[0];
                $in_description = $data[1];

                DB::statement("CALL importIllness(?,?)",
                    [$in_name, $in_description]);
            }

            fclose($handle);
        }

        return redirect()->route('illnesses.index');
    }

    public function importWards(Request $request)
    {
        $file = $request->file('csv_file');

        if (($handle = fopen($file, 'r')) !== false) {
            while (($data = fgetcsv($handle, 1000, ',')) !== false) {
                $name = $data[0];

                DB::statement("CALL importWard(?)",
                    [$name]);
            }

            fclose($handle);
        }

        return redirect()->route('wards.index');
    }

    public function importDoctors(Request $request)
    {
        $file = $request->file('csv_file');

        if (($handle = fopen($file, 'r')) !== false) {
            while (($data = fgetcsv($handle, 1000, ',')) !== false) {
                $first_name = $data[0];
                $last_name = $data[1];
                $specialization = $data[2];
                $phone_number = $data[3];
                $ward_name = $data[4];

                DB::statement("CALL importDoctor(?,?,?,?,?)",
                    [$first_name , $last_name, $specialization, $phone_number, $ward_name]);
            }

            fclose($handle);
        }

        return redirect()->route('doctors.index');
    }

    public function importAddresses(Request $request)
    {
        $file = $request->file('csv_file');

        if (($handle = fopen($file, 'r')) !== false) {
            while (($data = fgetcsv($handle, 1000, ',')) !== false) {
                $voivodeship = $data[0];
                $city = $data[1];
                $street = $data[2];
                $house_number = $data[3];
                $flat_number = $data[4];
                $postal_code = $data[5];

                DB::statement("CALL importAddress(?, ?, ?, ?, ?, ?)",
                    [$voivodeship, $city,  $street, $house_number, $flat_number, $postal_code]);
            }

            fclose($handle);
        }

        return redirect()->route('address.index');
    }
}
