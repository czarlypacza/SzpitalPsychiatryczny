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

        return response()->json(['message' => 'Import completed successfully']);
    }
}
