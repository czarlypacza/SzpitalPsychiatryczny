<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\Doctor;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::withoutForeignKeyConstraints(function () {
            Doctor::truncate();
        });
        Doctor::insert(
            [
                [
                    'first_name' => 'Alla',
                    'last_name' => 'Hoopper',
                    'specialization'=>'PROVIGIL',
                    'phone_number'=>'390-165-0329',
                    'ward_id'=>'19'
                ],
                [
                    'first_name' => 'Bev',
                    'last_name' => 'Barham',
                    'specialization'=>'Molds, Rusts and Smuts, Epicoccum nigrum',
                    'phone_number'=>'513-249-8833',
                    'ward_id'=>'19'
                ],
                [
                    'first_name' => 'Joanna',
                    'last_name' => 'Cotta',
                    'specialization'=>'CD DIORSKIN CITY DEFENSE Toxin Shield Pollution UV Advanced Protection with sunscreen Broad Spectrum SPF50',
                    'phone_number'=>'881-689-2873',
                    'ward_id'=>'14'
                ],
                [
                    'first_name' => 'Marillin',
                    'last_name' => 'Grayne',
                    'specialization'=>'Mint Sunscreen Lip Moisturizer',
                    'phone_number'=>'602-198-7415',
                    'ward_id'=>'18'
                ],
                [
                    'first_name' => 'Brnaba',
                    'last_name' => 'Sandle',
                    'specialization'=>'ISOPROPYL WINTER GREEN RUBBING ALCOHOL',
                    'phone_number'=>'934-939-0048',
                    'ward_id'=>'6'
                ],
                [
                    'first_name' => 'Carrissa',
                    'last_name' => 'Middup',
                    'specialization'=>'Aspirin',
                    'phone_number'=>'697-266-1428',
                    'ward_id'=>'11'
                ],
                [
                    'first_name' => 'Tripp',
                    'last_name' => 'Enevold',
                    'specialization'=>'Gabapentin',
                    'phone_number'=>'828-846-4763',
                    'ward_id'=>'1'
                ],
                [
                    'first_name' => 'Luciano',
                    'last_name' => 'Snary',
                    'specialization'=>'West Cottonwood',
                    'phone_number'=>'636-205-2150',
                    'ward_id'=>'13'
                ],
                [
                    'first_name' => 'Cris',
                    'last_name' => 'Sedgefield',
                    'specialization'=>'Artichoke',
                    'phone_number'=>'665-627-4220',
                    'ward_id'=>'6'
                ],
                [
                    'first_name' => 'Corny',
                    'last_name' => 'Pykerman',
                    'specialization'=>'Potassium Chloride',
                    'phone_number'=>'504-654-3109',
                    'ward_id'=>'6'
                ],
                [
                    'first_name' => 'Anna-diana',
                    'last_name' => 'Janous',
                    'specialization'=>'Neutrogena Healthy Skin Radiance',
                    'phone_number'=>'207-694-5139',
                    'ward_id'=>'5'
                ],
                [
                    'first_name' => 'Whitby',
                    'last_name' => 'Brim',
                    'specialization'=>'Welchol',
                    'phone_number'=>'207-823-7399',
                    'ward_id'=>'9'
                ],
                [
                    'first_name' => 'Margareta',
                    'last_name' => 'Roeby',
                    'specialization'=>'Ulta',
                    'phone_number'=>'600-785-7284',
                    'ward_id'=>'13'
                ],
                [
                    'first_name' => 'Odilia',
                    'last_name' => 'Geale',
                    'specialization'=>'Promethazine Hydrochloride',
                    'phone_number'=>'474-358-3155',
                    'ward_id'=>'4'
                ],
                [
                    'first_name' => 'Kendell',
                    'last_name' => 'Castanos',
                    'specialization'=>'Cold and Flu',
                    'phone_number'=>'366-677-8975',
                    'ward_id'=>'18'
                ],
                [
                    'first_name' => 'Fiorenze',
                    'last_name' => 'Soppett',
                    'specialization'=>'butalbital, acetaminophen and caffeine',
                    'phone_number'=>'505-180-7897',
                    'ward_id'=>'5'
                ],
                [
                    'first_name' => 'Hube',
                    'last_name' => 'Zammitt',
                    'specialization'=>'Fomepizole',
                    'phone_number'=>'193-192-5923',
                    'ward_id'=>'9'
                ],
                [
                    'first_name' => 'Reggie',
                    'last_name' => 'Messier',
                    'specialization'=>'Nicardipine Hydrochloride',
                    'phone_number'=>'202-735-7829',
                    'ward_id'=>'3'
                ],
                [
                    'first_name' => 'Evania',
                    'last_name' => 'Mellor',
                    'specialization'=>'SERTRALINE',
                    'phone_number'=>'226-253-9459',
                    'ward_id'=>'12'
                ],
                [
                    'first_name' => 'Sergio',
                    'last_name' => 'Baldacco',
                    'specialization'=>'Benicar',
                    'phone_number'=>'782-548-5788',
                    'ward_id'=>'5'
                ],
                [
                    'first_name' => 'Katrinka',
                    'last_name' => 'Kalisch',
                    'specialization'=>'Methotrexate Sodium',
                    'phone_number'=>'878-462-5228',
                    'ward_id'=>'13'
                ],
                [
                    'first_name' => 'Audrie',
                    'last_name' => 'Mapston',
                    'specialization'=>'Menstrual Headache',
                    'phone_number'=>'509-540-3931',
                    'ward_id'=>'19'
                ],
                [
                    'first_name' => 'Zaccaria',
                    'last_name' => 'Weavers',
                    'specialization'=>'Value PharmaPain Reliever',
                    'phone_number'=>'423-767-9709',
                    'ward_id'=>'15'
                ],
                [
                    'first_name' => 'Sargent',
                    'last_name' => 'Gatland',
                    'specialization'=>'VENLAFAXINE HYDROCHLORIDE',
                    'phone_number'=>'836-260-8755',
                    'ward_id'=>'4'
                ],
                [
                    'first_name' => 'Everett',
                    'last_name' => 'Thombleson',
                    'specialization'=>'Personal Care Sensitive Skin Deep Cleaning Astringent',
                    'phone_number'=>'324-561-9815',
                    'ward_id'=>'15'
                ],
                [
                    'first_name' => 'Eran',
                    'last_name' => 'Spicer',
                    'specialization'=>'Glaucoma',
                    'phone_number'=>'410-953-5837',
                    'ward_id'=>'2'
                ],
                [
                    'first_name' => 'Claude',
                    'last_name' => 'Desouza',
                    'specialization'=>'Cold Spot',
                    'phone_number'=>'327-303-0503',
                    'ward_id'=>'14'
                ],
                [
                    'first_name' => 'Pansy',
                    'last_name' => 'Bucklan',
                    'specialization'=>'Tenzer',
                    'phone_number'=>'460-134-0401',
                    'ward_id'=>'1'
                ],
                [
                    'first_name' => 'Ainslee',
                    'last_name' => 'Molan',
                    'specialization'=>'Lamotrigine',
                    'phone_number'=>'231-167-8604',
                    'ward_id'=>'12'
                ],
                [
                    'first_name' => 'Den',
                    'last_name' => 'Sked',
                    'specialization'=>'Topiramate',
                    'phone_number'=>'221-991-2198',
                    'ward_id'=>'18'
                ],

            ]
        );
    }
}
