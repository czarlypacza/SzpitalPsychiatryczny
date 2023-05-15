<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class illness_patientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('illness_patient')->truncate();
        DB::table('illness_patient')->insert([
            [
                'patient_id' => 1,
                'illness_id' => 7
            ],
            [
                'patient_id' => 1,
                'illness_id' => 13
            ],
            [
                'patient_id' => 2,
                'illness_id' => 9
            ],
            [
                'patient_id' => 3,
                'illness_id' => 10
            ],
            [
                'patient_id' => 4,
                'illness_id' => 22
            ],
            [
                'patient_id' => 4,
                'illness_id' => 12
            ],
            [
                'patient_id' => 5,
                'illness_id' => 1
            ],
            [
                'patient_id' => 5,
                'illness_id' => 11
            ],
            [
                'patient_id' => 6,
                'illness_id' => 24
            ],
            [
                'patient_id' => 7,
                'illness_id' => 10
            ],
            [
                'patient_id' => 8,
                'illness_id' => 14
            ],
            [
                'patient_id' => 9,
                'illness_id' => 4
            ],
            [
                'patient_id' => 9,
                'illness_id' => 15
            ],
            [
                'patient_id' => 9,
                'illness_id' => 21
            ],
            [
                'patient_id' => 10,
                'illness_id' => 13
            ],
            [
                'patient_id' => 11,
                'illness_id' => 19
            ],
            [
                'patient_id' => 12,
                'illness_id' => 15
            ],
            [
                'patient_id' => 13,
                'illness_id' => 27
            ],
            [
                'patient_id' => 13,
                'illness_id' => 15
            ],
            [
                'patient_id' => 14,
                'illness_id' => 23
            ],
            [
                'patient_id' => 15,
                'illness_id' => 6
            ],
            [
                'patient_id' => 15,
                'illness_id' => 29
            ],
            [
                'patient_id' => 16,
                'illness_id' => 5
            ],
            [
                'patient_id' => 16,
                'illness_id' => 20
            ],
            [
                'patient_id' => 17,
                'illness_id' => 2
            ],
            [
                'patient_id' => 18,
                'illness_id' => 22
            ],
            [
                'patient_id' => 19,
                'illness_id' => 13
            ],
            [
                'patient_id' => 20,
                'illness_id' => 19
            ],
            [
                'patient_id' => 21,
                'illness_id' => 25
            ],
            [
                'patient_id' => 22,
                'illness_id' => 1
            ],
            [
                'patient_id' => 23,
                'illness_id' => 4
            ],
            [
                'patient_id' => 24,
                'illness_id' => 6
            ],
            [
                'patient_id' => 25,
                'illness_id' => 9
            ],
            [
                'patient_id' => 26,
                'illness_id' => 16
            ],
            [
                'patient_id' => 26,
                'illness_id' => 29
            ],
            [
                'patient_id' => 27,
                'illness_id' => 24
            ],
            [
                'patient_id' => 28,
                'illness_id' => 8
            ],
            [
                'patient_id' => 29,
                'illness_id' => 28
            ],
            [
                'patient_id' => 30,
                'illness_id' => 25
            ],
            [
                'patient_id' => 31,
                'illness_id' => 22
            ],
            [
                'patient_id' => 32,
                'illness_id' => 1
            ],
            [
                'patient_id' => 33,
                'illness_id' => 11
            ],
            [
                'patient_id' => 33,
                'illness_id' => 7
            ],
            [
                'patient_id' => 33,
                'illness_id' => 6
            ],
            [
                'patient_id' => 33,
                'illness_id' => 28
            ],
            [
                'patient_id' => 34,
                'illness_id' => 24
            ],
            [
                'patient_id' => 34,
                'illness_id' => 16
            ],
            [
                'patient_id' => 35,
                'illness_id' => 30
            ],
            [
                'patient_id' => 36,
                'illness_id' => 18
            ],
            [
                'patient_id' => 36,
                'illness_id' => 22
            ],
            [
                'patient_id' => 37,
                'illness_id' => 5
            ],
            [
                'patient_id' => 37,
                'illness_id' => 15
            ],
            [
                'patient_id' => 38,
                'illness_id' => 25
            ],
            [
                'patient_id' => 39,
                'illness_id' => 21
            ],
            [
                'patient_id' => 39,
                'illness_id' => 1
            ],
            [
                'patient_id' => 40,
                'illness_id' => 5
            ],
            [
                'patient_id' => 40,
                'illness_id' => 19
            ],
            [
                'patient_id' => 40,
                'illness_id' => 7
            ],
            [
                'patient_id' => 41,
                'illness_id' => 6
            ],
            [
                'patient_id' => 41,
                'illness_id' => 29
            ],
            [
                'patient_id' => 42,
                'illness_id' => 25
            ],
            [
                'patient_id' => 42,
                'illness_id' => 29
            ],
            [
                'patient_id' => 43,
                'illness_id' => 15
            ],
            [
                'patient_id' => 44,
                'illness_id' => 18
            ],
            [
                'patient_id' => 45,
                'illness_id' => 9
            ],
            [
                'patient_id' => 46,
                'illness_id' => 15
            ],
            [
                'patient_id' => 46,
                'illness_id' => 14
            ],
            [
                'patient_id' => 47,
                'illness_id' => 10
            ],
            [
                'patient_id' => 48,
                'illness_id' => 22
            ],
            [
                'patient_id' => 48,
                'illness_id' => 6
            ],
            [
                'patient_id' => 49,
                'illness_id' => 28
            ],
            [
                'patient_id' => 50,
                'illness_id' => 25
            ],
            [
                'patient_id' => 51,
                'illness_id' => 6
            ],
            [
                'patient_id' => 52,
                'illness_id' => 23
            ],
            [
                'patient_id' => 53,
                'illness_id' => 9
            ],
            [
                'patient_id' => 54,
                'illness_id' => 11
            ],
            [
                'patient_id' => 54,
                'illness_id' => 5
            ],
            [
                'patient_id' => 54,
                'illness_id' => 21
            ],
            [
                'patient_id' => 54,
                'illness_id' => 11
            ],
            [
                'patient_id' => 55,
                'illness_id' => 20
            ],
            [
                'patient_id' => 56,
                'illness_id' => 14
            ],
            [
                'patient_id' => 56,
                'illness_id' => 29
            ],
            [
                'patient_id' => 56,
                'illness_id' => 11
            ],
            [
                'patient_id' => 57,
                'illness_id' => 18
            ],
            [
                'patient_id' => 57,
                'illness_id' => 7
            ],
            [
                'patient_id' => 58,
                'illness_id' => 17
            ],
            [
                'patient_id' => 59,
                'illness_id' => 5
            ],
            [
                'patient_id' => 60,
                'illness_id' => 19
            ],
            [
                'patient_id' => 61,
                'illness_id' => 17
            ],
            [
                'patient_id' => 62,
                'illness_id' => 21
            ],
            [
                'patient_id' => 62,
                'illness_id' => 20
            ],
            [
                'patient_id' => 63,
                'illness_id' => 5
            ],
            [
                'patient_id' => 64,
                'illness_id' => 12
            ],
            [
                'patient_id' => 64,
                'illness_id' => 7
            ],
            [
                'patient_id' => 65,
                'illness_id' => 10
            ],
            [
                'patient_id' => 65,
                'illness_id' => 6
            ],
            [
                'patient_id' => 66,
                'illness_id' => 12
            ],
            [
                'patient_id' => 67,
                'illness_id' => 7
            ],
            [
                'patient_id' => 68,
                'illness_id' => 3
            ],
            [
                'patient_id' => 69,
                'illness_id' => 15
            ],
            [
                'patient_id' => 69,
                'illness_id' => 2
            ],
            [
                'patient_id' => 70,
                'illness_id' => 1
            ],
            [
                'patient_id' => 70,
                'illness_id' => 11
            ],
            [
                'patient_id' => 70,
                'illness_id' => 26
            ],
            [
                'patient_id' => 71,
                'illness_id' => 14
            ],
            [
                'patient_id' => 72,
                'illness_id' => 23
            ],
            [
                'patient_id' => 73,
                'illness_id' => 16
            ],
            [
                'patient_id' => 74,
                'illness_id' => 4
            ],
            [
                'patient_id' => 74,
                'illness_id' => 17
            ],
            [
                'patient_id' => 75,
                'illness_id' => 6
            ],
            [
                'patient_id' => 75,
                'illness_id' => 10
            ],
            [
                'patient_id' => 76,
                'illness_id' => 19
            ],
            [
                'patient_id' => 76,
                'illness_id' => 8
            ],
            [
                'patient_id' => 77,
                'illness_id' => 9
            ],
            [
                'patient_id' => 78,
                'illness_id' => 21
            ],
            [
                'patient_id' => 79,
                'illness_id' => 21
            ],
            [
                'patient_id' => 79,
                'illness_id' => 12
            ],
            [
                'patient_id' => 79,
                'illness_id' => 9
            ],
            [
                'patient_id' => 79,
                'illness_id' => 4
            ],
            [
                'patient_id' => 79,
                'illness_id' => 1
            ],
            [
                'patient_id' => 79,
                'illness_id' => 22
            ],
            [
                'patient_id' => 79,
                'illness_id' => 19
            ],
            [
                'patient_id' => 80,
                'illness_id' => 26
            ],
            [
                'patient_id' => 81,
                'illness_id' => 24
            ],
            [
                'patient_id' => 82,
                'illness_id' => 28
            ],
            [
                'patient_id' => 83,
                'illness_id' => 25
            ],
            [
                'patient_id' => 84,
                'illness_id' => 17
            ],
            [
                'patient_id' => 85,
                'illness_id' => 27
            ],
            [
                'patient_id' => 85,
                'illness_id' => 14
            ],
            [
                'patient_id' => 86,
                'illness_id' => 26
            ],
            [
                'patient_id' => 86,
                'illness_id' => 1
            ],
            [
                'patient_id' => 86,
                'illness_id' => 19
            ],
            [
                'patient_id' => 86,
                'illness_id' => 8
            ],
            [
                'patient_id' => 86,
                'illness_id' => 22
            ],
            [
                'patient_id' => 86,
                'illness_id' => 12
            ],
            [
                'patient_id' => 87,
                'illness_id' => 21
            ],
            [
                'patient_id' => 88,
                'illness_id' => 11
            ],
            [
                'patient_id' => 88,
                'illness_id' => 27
            ],
            [
                'patient_id' => 89,
                'illness_id' => 25
            ],
            [
                'patient_id' => 89,
                'illness_id' => 26
            ],
            [
                'patient_id' => 89,
                'illness_id' => 7
            ],
            [
                'patient_id' => 89,
                'illness_id' => 29
            ],
            [
                'patient_id' => 90,
                'illness_id' => 19
            ],
            [
                'patient_id' => 91,
                'illness_id' => 22
            ],
            [
                'patient_id' => 92,
                'illness_id' => 24
            ],
            [
                'patient_id' => 92,
                'illness_id' => 8
            ],
            [
                'patient_id' => 93,
                'illness_id' => 5
            ],
            [
                'patient_id' => 94,
                'illness_id' => 13
            ],
            [
                'patient_id' => 95,
                'illness_id' => 9
            ],
            [
                'patient_id' => 96,
                'illness_id' => 19
            ],
            [
                'patient_id' => 97,
                'illness_id' => 14
            ],
            [
                'patient_id' => 98,
                'illness_id' => 15
            ],
            [
                'patient_id' => 98,
                'illness_id' => 14
            ],
            [
                'patient_id' => 98,
                'illness_id' => 26
            ],
            [
                'patient_id' => 98,
                'illness_id' => 10
            ],
            [
                'patient_id' => 98,
                'illness_id' => 12
            ],
            [
                'patient_id' => 99,
                'illness_id' => 8
            ],
            [
                'patient_id' => 99,
                'illness_id' => 27
            ],
            [
                'patient_id' => 99,
                'illness_id' => 18
            ],
            [
                'patient_id' => 99,
                'illness_id' => 11
            ],
            [
                'patient_id' => 99,
                'illness_id' => 28
            ],
            [
                'patient_id' => 99,
                'illness_id' => 8
            ],
            [
                'patient_id' => 100,
                'illness_id' => 19
            ],
            [
                'patient_id' => 100,
                'illness_id' => 27
            ],
        ]);
    }
}
