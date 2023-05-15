<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Ward;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;



class WardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Schema::withoutForeignKeyConstraints(function () {
            //DB::table('wards')->truncate();

            Ward::truncate();
        });

        Ward::insert(
            [
                [
                    'ward_name' => 'Parker-Walter'
                ],
                [
                    'ward_name' => 'Reynolds and Sons'
                ],
                [
                    'ward_name' => 'Greenfelder and Sons'
                ],
                [
                    'ward_name' => 'Watsica Inc'
                ],
                [
                    'ward_name' => 'Luettgen Group'
                ],
                [
                    'ward_name' => 'Ferry-Kshlerin'
                ],
                [
                    'ward_name' => 'Hackett and Sons'
                ],
                [
                    'ward_name' => 'Bernhard-Welch'
                ],
                [
                    'ward_name' => 'Welch and Sons'
                ],
                [
                    'ward_name' => 'Larson Group'
                ],
                [
                    'ward_name' => 'Schuster-Hartmann'
                ],
                [
                    'ward_name' => 'Flatley Inc'
                ],
                [
                    'ward_name' => 'Bailey Inc'
                ],
                [
                    'ward_name' => 'Nitzsche Group'
                ],
                [
                    'ward_name' => 'Kutch-Weimann'
                ],
                [
                    'ward_name' => 'Collins LLC'
                ],
                [
                    'ward_name' => 'Jones, Larkin and Jacobs'
                ],
                [
                    'ward_name' => 'Jacobi-Casper'
                ],
                [
                    'ward_name' => 'Glover LLC'
                ],
                [
                    'ward_name' => 'Hermann-Grant'
                ],
                [
                    'ward_name' => 'Larkin-Boyle'
                ],
                [
                    'ward_name' => 'Raynor Inc'
                ],
                [
                    'ward_name' => 'Cormier and Sons'
                ],
                [
                    'ward_name' => 'Hirthe-Mante'
                ],
                [
                    'ward_name' => 'Streich LLC'
                ],
                [
                    'ward_name' => 'Thiel, Kuhn and Greenfelder'
                ],
                [
                    'ward_name' => 'Zboncak-Schimmel'
                ],
                [
                    'ward_name' => 'Flatley-Armstrong'
                ],
                [
                    'ward_name' => 'Reilly-Ankunding'
                ],
                [
                    'ward_name' => 'Davis, Towne and Price'
                ],
            ]
        );
    }
}
