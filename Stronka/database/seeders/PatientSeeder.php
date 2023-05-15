<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Patient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::withoutForeignKeyConstraints(function () {
            //DB::table('wards')->truncate();
            //Patient::truncate();
        });
        Patient::insert([
                [
                    'first_name' => 'Kirk',
                    'last_name' => 'Wornum',
                    'age' => 63,
                    'phone_number' => '791-622-6642',
                    'pesel' => 86097259953,
                    'weight' => 80,
                    'height' => 184,
                    'doctor_id' => 25,
                    'address_id' => 51
                ],
                [
                    'first_name' => 'Bradly',
                    'last_name' => 'Rosenbush',
                    'age' => 50,
                    'phone_number' => '920-420-6987',
                    'pesel' => 83174770222,
                    'weight' => 95,
                    'height' => 178,
                    'doctor_id' => 23,
                    'address_id' => 12
                ],
                [
                    'first_name' => 'John',
                    'last_name' => 'Marnane',
                    'age' => 70,
                    'phone_number' => '591-739-4369',
                    'pesel' => 84318991349,
                    'weight' => 91,
                    'height' => 158,
                    'doctor_id' => 18,
                    'address_id' => 77
                ],
                [
                    'first_name' => 'Jerad',
                    'last_name' => 'Scrivin',
                    'age' => 48,
                    'phone_number' => '868-865-2817',
                    'pesel' => 83787268570,
                    'weight' => 70,
                    'height' => 168,
                    'doctor_id' => 16,
                    'address_id' => 10
                ],
                [
                    'first_name' => 'Harald',
                    'last_name' => 'Ivashnikov',
                    'age' => 66,
                    'phone_number' => '579-729-6357',
                    'pesel' => 86900233971,
                    'weight' => 96,
                    'height' => 171,
                    'doctor_id' => 1,
                    'address_id' => 65
                ],
                [
                    'first_name' => 'Clemente',
                    'last_name' => 'McTrustey',
                    'age' => 25,
                    'phone_number' => '112-780-9298',
                    'pesel' => 87504821240,
                    'weight' => 58,
                    'height' => 150,
                    'doctor_id' => 3,
                    'address_id' => 63
                ],
                [
                    'first_name' => 'Tanney',
                    'last_name' => 'Kulver',
                    'age' => 42,
                    'phone_number' => '831-526-4543',
                    'pesel' => 79374124322,
                    'weight' => 83,
                    'height' => 160,
                    'doctor_id' => 11,
                    'address_id' => 15
                ],
                [
                    'first_name' => 'Nerti',
                    'last_name' => 'Scothron',
                    'age' => 21,
                    'phone_number' => '272-709-9617',
                    'pesel' => 88865168327,
                    'weight' => 86,
                    'height' => 179,
                    'doctor_id' => 3,
                    'address_id' => 36
                ],
                [
                    'first_name' => 'Bud',
                    'last_name' => 'McKeand',
                    'age' => 67,
                    'phone_number' => '671-130-1745',
                    'pesel' => 91735282070,
                    'weight' => 101,
                    'height' => 168,
                    'doctor_id' => 27,
                    'address_id' => 40
                ],
                [
                    'first_name' => 'Barret',
                    'last_name' => 'Fallawe',
                    'age' => 35,
                    'phone_number' => '482-781-7180',
                    'pesel' => 89489504770,
                    'weight' => 61,
                    'height' => 172,
                    'doctor_id' => 23,
                    'address_id' => 49
                ],
                [
                    'first_name' => 'Parker',
                    'last_name' => 'Dolley',
                    'age' => 44,
                    'phone_number' => '499-327-9813',
                    'pesel' => 94934030657,
                    'weight' => 73,
                    'height' => 150,
                    'doctor_id' => 14,
                    'address_id' => 5
                ],
                [
                    'first_name' => 'Therese',
                    'last_name' => 'MacGiolla',
                    'age' => 47,
                    'phone_number' => '680-681-9590',
                    'pesel' => 78601662428,
                    'weight' => 75,
                    'height' => 197,
                    'doctor_id' => 11,
                    'address_id' => 39
                ],
                [
                    'first_name' => 'Starlin',
                    'last_name' => 'Rubertelli',
                    'age' => 36,
                    'phone_number' => '127-938-6996',
                    'pesel' => 97185372821,
                    'weight' => 90,
                    'height' => 174,
                    'doctor_id' => 4,
                    'address_id' => 10
                ],
                [
                    'first_name' => 'Sherwood',
                    'last_name' => 'Rowsel',
                    'age' => 50,
                    'phone_number' => '620-496-9006',
                    'pesel' => 95695068819,
                    'weight' => 71,
                    'height' => 192,
                    'doctor_id' => 5,
                    'address_id' => 58
                ],
                [
                    'first_name' => 'Sadie',
                    'last_name' => 'Pehrsson',
                    'age' => 60,
                    'phone_number' => '291-301-9519',
                    'pesel' => 98141643835,
                    'weight' => 64,
                    'height' => 182,
                    'doctor_id' => 15,
                    'address_id' => 41
                ],
                [
                    'first_name' => 'Miran',
                    'last_name' => 'Kerwood',
                    'age' => 64,
                    'phone_number' => '845-247-8492',
                    'pesel' => 94384292329,
                    'weight' => 92,
                    'height' => 188,
                    'doctor_id' => 25,
                    'address_id' => 87
                ],
                [
                    'first_name' => 'Stillmann',
                    'last_name' => 'Righy',
                    'age' => 15,
                    'phone_number' => '235-231-8603',
                    'pesel' => 80821850989,
                    'weight' => 87,
                    'height' => 176,
                    'doctor_id' => 26,
                    'address_id' => 67
                ],
                [
                    'first_name' => 'Derron',
                    'last_name' => 'Lamplough',
                    'age' => 25,
                    'phone_number' => '298-132-7832',
                    'pesel' => 99762132786,
                    'weight' => 108,
                    'height' => 187,
                    'doctor_id' => 16,
                    'address_id' => 41
                ],
                [
                    'first_name' => 'Lulita',
                    'last_name' => 'Lewsam',
                    'age' => 54,
                    'phone_number' => '418-850-0188',
                    'pesel' => 80989396262,
                    'weight' => 74,
                    'height' => 188,
                    'doctor_id' => 18,
                    'address_id' => 27
                ],
                [
                    'first_name' => 'Daryn',
                    'last_name' => 'Giacomo',
                    'age' => 37,
                    'phone_number' => '823-124-9736',
                    'pesel' => 84278364562,
                    'weight' => 88,
                    'height' => 170,
                    'doctor_id' => 29,
                    'address_id' => 80
                ],
                [
                    'first_name' => 'Ase',
                    'last_name' => 'Itzkin',
                    'age' => 16,
                    'phone_number' => '450-801-7353',
                    'pesel' => 87855021983,
                    'weight' => 55,
                    'height' => 164,
                    'doctor_id' => 13,
                    'address_id' => 44
                ],
                [
                    'first_name' => 'Cal',
                    'last_name' => 'Cloney',
                    'age' => 48,
                    'phone_number' => '717-789-6339',
                    'pesel' => 98152195041,
                    'weight' => 59,
                    'height' => 176,
                    'doctor_id' => 10,
                    'address_id' => 56
                ],
                [
                    'first_name' => 'Ephrayim',
                    'last_name' => 'Adrain',
                    'age' => 48,
                    'phone_number' => '444-390-7019',
                    'pesel' => 80475595670,
                    'weight' => 56,
                    'height' => 152,
                    'doctor_id' => 3,
                    'address_id' => 47
                ],
                [
                    'first_name' => 'Jamal',
                    'last_name' => 'Gheeorghie',
                    'age' => 24,
                    'phone_number' => '477-510-0394',
                    'pesel' => 78146832866,
                    'weight' => 95,
                    'height' => 201,
                    'doctor_id' => 23,
                    'address_id' => 91
                ],
                [
                    'first_name' => 'Pattin',
                    'last_name' => 'Cotty',
                    'age' => 47,
                    'phone_number' => '203-276-9357',
                    'pesel' => 94013384506,
                    'weight' => 74,
                    'height' => 156,
                    'doctor_id' => 26,
                    'address_id' => 21
                ],
                [
                    'first_name' => 'Abie',
                    'last_name' => 'Watford',
                    'age' => 50,
                    'phone_number' => '663-824-5361',
                    'pesel' => 83392825979,
                    'weight' => 57,
                    'height' => 205,
                    'doctor_id' => 27,
                    'address_id' => 34
                ],
                [
                    'first_name' => 'Norton',
                    'last_name' => 'Cobbe',
                    'age' => 17,
                    'phone_number' => '647-122-6164',
                    'pesel' => 80763121397,
                    'weight' => 80,
                    'height' => 183,
                    'doctor_id' => 17,
                    'address_id' => 47
                ],
                [
                    'first_name' => 'Husein',
                    'last_name' => 'Taverner',
                    'age' => 26,
                    'phone_number' => '293-724-0965',
                    'pesel' => 86115659590,
                    'weight' => 68,
                    'height' => 172,
                    'doctor_id' => 19,
                    'address_id' => 88
                ],
                [
                    'first_name' => 'Odette',
                    'last_name' => 'Burgis',
                    'age' => 54,
                    'phone_number' => '175-283-8881',
                    'pesel' => 94658246110,
                    'weight' => 65,
                    'height' => 157,
                    'doctor_id' => 1,
                    'address_id' => 63
                ],
                [
                    'first_name' => 'Corina',
                    'last_name' => 'Paddefield',
                    'age' => 49,
                    'phone_number' => '522-111-6626',
                    'pesel' => 84405831926,
                    'weight' => 70,
                    'height' => 163,
                    'doctor_id' => 10,
                    'address_id' => 38
                ],
                [
                    'first_name' => 'Mady',
                    'last_name' => 'Server',
                    'age' => 29,
                    'phone_number' => '335-634-5218',
                    'pesel' => 81738455226,
                    'weight' => 94,
                    'height' => 156,
                    'doctor_id' => 20,
                    'address_id' => 68
                ],
                [
                    'first_name' => 'Putnam',
                    'last_name' => 'Thomann',
                    'age' => 30,
                    'phone_number' => '473-729-9238',
                    'pesel' => 83779923550,
                    'weight' => 85,
                    'height' => 158,
                    'doctor_id' => 28,
                    'address_id' => 15
                ],
                [
                    'first_name' => 'Emlen',
                    'last_name' => 'MacGaffey',
                    'age' => 17,
                    'phone_number' => '616-435-7028',
                    'pesel' => 98160198735,
                    'weight' => 93,
                    'height' => 168,
                    'doctor_id' => 20,
                    'address_id' => 47
                ],
                [
                    'first_name' => 'Mame',
                    'last_name' => 'Conahy',
                    'age' => 47,
                    'phone_number' => '351-811-8840',
                    'pesel' => 88187128532,
                    'weight' => 65,
                    'height' => 173,
                    'doctor_id' => 16,
                    'address_id' => 81
                ],
                [
                    'first_name' => 'Giordano',
                    'last_name' => 'Ferminger',
                    'age' => 50,
                    'phone_number' => '963-956-3565',
                    'pesel' => 95385980836,
                    'weight' => 56,
                    'height' => 183,
                    'doctor_id' => 14,
                    'address_id' => 73
                ],
                [
                    'first_name' => 'Vin',
                    'last_name' => 'Greville',
                    'age' => 39,
                    'phone_number' => '549-464-6252',
                    'pesel' => 86647646804,
                    'weight' => 102,
                    'height' => 175,
                    'doctor_id' => 3,
                    'address_id' => 83
                ],
                [
                    'first_name' => 'Flss',
                    'last_name' => 'Lantry',
                    'age' => 24,
                    'phone_number' => '705-357-1986',
                    'pesel' => 98247672761,
                    'weight' => 96,
                    'height' => 195,
                    'doctor_id' => 7,
                    'address_id' => 69
                ],
                [
                    'first_name' => 'Cleavland',
                    'last_name' => 'Salvage',
                    'age' => 38,
                    'phone_number' => '240-734-4653',
                    'pesel' => 87069033929,
                    'weight' => 97,
                    'height' => 200,
                    'doctor_id' => 2,
                    'address_id' => 22
                ],
                [
                    'first_name' => 'Judi',
                    'last_name' => 'Corroyer',
                    'age' => 52,
                    'phone_number' => '381-852-3086',
                    'pesel' => 82720213115,
                    'weight' => 65,
                    'height' => 202,
                    'doctor_id' => 6,
                    'address_id' => 53
                ],
                [
                    'first_name' => 'Lindi',
                    'last_name' => 'Jervois',
                    'age' => 23,
                    'phone_number' => '283-394-1367',
                    'pesel' => 81435654840,
                    'weight' => 80,
                    'height' => 177,
                    'doctor_id' => 15,
                    'address_id' => 56
                ],
                [
                    'first_name' => 'Jourdain',
                    'last_name' => 'Ballsdon',
                    'age' => 62,
                    'phone_number' => '360-428-7309',
                    'pesel' => 95506901214,
                    'weight' => 105,
                    'height' => 178,
                    'doctor_id' => 22,
                    'address_id' => 6
                ],
                [
                    'first_name' => 'Noland',
                    'last_name' => 'Paylie',
                    'age' => 53,
                    'phone_number' => '965-812-1770',
                    'pesel' => 90951814912,
                    'weight' => 71,
                    'height' => 171,
                    'doctor_id' => 4,
                    'address_id' => 83
                ],
                [
                    'first_name' => 'Harmonia',
                    'last_name' => 'Abeau',
                    'age' => 40,
                    'phone_number' => '763-165-7762',
                    'pesel' => 86539259077,
                    'weight' => 109,
                    'height' => 152,
                    'doctor_id' => 23,
                    'address_id' => 66
                ],
                [
                    'first_name' => 'Rebecca',
                    'last_name' => 'Tomasini',
                    'age' => 34,
                    'phone_number' => '430-721-3825',
                    'pesel' => 97571615985,
                    'weight' => 78,
                    'height' => 204,
                    'doctor_id' => 2,
                    'address_id' => 91
                ],
                [
                    'first_name' => 'Lindsey',
                    'last_name' => 'Andrault',
                    'age' => 63,
                    'phone_number' => '390-477-3393',
                    'pesel' => 93878893158,
                    'weight' => 90,
                    'height' => 163,
                    'doctor_id' => 25,
                    'address_id' => 95
                ],
                [
                    'first_name' => 'Rebeka',
                    'last_name' => 'Alenikov',
                    'age' => 20,
                    'phone_number' => '885-227-4577',
                    'pesel' => 78679614006,
                    'weight' => 97,
                    'height' => 199,
                    'doctor_id' => 6,
                    'address_id' => 72
                ],
                [
                    'first_name' => 'Michal',
                    'last_name' => 'Olligan',
                    'age' => 66,
                    'phone_number' => '996-307-9709',
                    'pesel' => 95988037838,
                    'weight' => 107,
                    'height' => 157,
                    'doctor_id' => 15,
                    'address_id' => 10
                ],
                [
                    'first_name' => 'Asher',
                    'last_name' => 'Beahan',
                    'age' => 55,
                    'phone_number' => '536-873-7982',
                    'pesel' => 82362424074,
                    'weight' => 83,
                    'height' => 196,
                    'doctor_id' => 19,
                    'address_id' => 61
                ],
                [
                    'first_name' => 'Mycah',
                    'last_name' => 'Cuerda',
                    'age' => 33,
                    'phone_number' => '213-747-6302',
                    'pesel' => 83048313601,
                    'weight' => 97,
                    'height' => 204,
                    'doctor_id' => 21,
                    'address_id' => 93
                ],
                [
                    'first_name' => 'Odille',
                    'last_name' => 'Fowls',
                    'age' => 50,
                    'phone_number' => '858-795-9460',
                    'pesel' => 89391327629,
                    'weight' => 102,
                    'height' => 198,
                    'doctor_id' => 19,
                    'address_id' => 49
                ],
                [
                    'first_name' => 'Susanne',
                    'last_name' => 'Cantrill',
                    'age' => 20,
                    'phone_number' => '560-451-2621',
                    'pesel' => 89146136710,
                    'weight' => 73,
                    'height' => 164,
                    'doctor_id' => 12,
                    'address_id' => 40
                ],
                [
                    'first_name' => 'Garvey',
                    'last_name' => 'Enticknap',
                    'age' => 18,
                    'phone_number' => '522-118-1049',
                    'pesel' => 94423587591,
                    'weight' => 88,
                    'height' => 191,
                    'doctor_id' => 8,
                    'address_id' => 28
                ],
                [
                    'first_name' => 'Selinda',
                    'last_name' => 'Aleksich',
                    'age' => 18,
                    'phone_number' => '654-290-8273',
                    'pesel' => 90994639417,
                    'weight' => 107,
                    'height' => 199,
                    'doctor_id' => 9,
                    'address_id' => 42
                ],
                [
                    'first_name' => 'Reinald',
                    'last_name' => 'Howgill',
                    'age' => 40,
                    'phone_number' => '947-681-8322',
                    'pesel' => 96568290617,
                    'weight' => 68,
                    'height' => 153,
                    'doctor_id' => 9,
                    'address_id' => 12
                ],
                [
                    'first_name' => 'Beauregard',
                    'last_name' => 'Gorman',
                    'age' => 26,
                    'phone_number' => '802-692-9002',
                    'pesel' => 97729204400,
                    'weight' => 84,
                    'height' => 191,
                    'doctor_id' => 1,
                    'address_id' => 12
                ],
                [
                    'first_name' => 'Teena',
                    'last_name' => 'Schustl',
                    'age' => 53,
                    'phone_number' => '214-315-2761',
                    'pesel' => 80301598756,
                    'weight' => 79,
                    'height' => 153,
                    'doctor_id' => 27,
                    'address_id' => 96
                ],
                [
                    'first_name' => 'Gunther',
                    'last_name' => 'Kaubisch',
                    'age' => 28,
                    'phone_number' => '985-803-0200',
                    'pesel' => 84434025215,
                    'weight' => 73,
                    'height' => 178,
                    'doctor_id' => 18,
                    'address_id' => 89
                ],
                [
                    'first_name' => 'Carly',
                    'last_name' => 'Jaye',
                    'age' => 67,
                    'phone_number' => '127-400-3355',
                    'pesel' => 80208278951,
                    'weight' => 69,
                    'height' => 151,
                    'doctor_id' => 18,
                    'address_id' => 5
                ],
                [
                    'first_name' => 'Myron',
                    'last_name' => 'Messingham',
                    'age' => 21,
                    'phone_number' => '263-483-2900',
                    'pesel' => 87667030491,
                    'weight' => 61,
                    'height' => 187,
                    'doctor_id' => 28,
                    'address_id' => 83
                ],
                [
                    'first_name' => 'Susette',
                    'last_name' => 'Blaschke',
                    'age' => 31,
                    'phone_number' => '785-985-8306',
                    'pesel' => 95790322965,
                    'weight' => 75,
                    'height' => 182,
                    'doctor_id' => 14,
                    'address_id' => 13
                ],
                [
                    'first_name' => 'Noelani',
                    'last_name' => 'Luscott',
                    'age' => 36,
                    'phone_number' => '340-788-1336',
                    'pesel' => 86478111971,
                    'weight' => 62,
                    'height' => 164,
                    'doctor_id' => 15,
                    'address_id' => 51
                ],
                [
                    'first_name' => 'Sax',
                    'last_name' => 'Riccioppo',
                    'age' => 43,
                    'phone_number' => '702-181-7847',
                    'pesel' => 95065051080,
                    'weight' => 64,
                    'height' => 198,
                    'doctor_id' => 21,
                    'address_id' => 54
                ],
                [
                    'first_name' => 'Klarrisa',
                    'last_name' => 'Iddon',
                    'age' => 31,
                    'phone_number' => '138-709-6531',
                    'pesel' => 81357917912,
                    'weight' => 107,
                    'height' => 164,
                    'doctor_id' => 25,
                    'address_id' => 9
                ],
                [
                    'first_name' => 'Carmen',
                    'last_name' => 'Burnsell',
                    'age' => 33,
                    'phone_number' => '883-171-5577',
                    'pesel' => 84618106552,
                    'weight' => 57,
                    'height' => 202,
                    'doctor_id' => 17,
                    'address_id' => 93
                ],
                [
                    'first_name' => 'Devin',
                    'last_name' => 'Pendleton',
                    'age' => 27,
                    'phone_number' => '669-767-8103',
                    'pesel' => 80817496896,
                    'weight' => 79,
                    'height' => 195,
                    'doctor_id' => 26,
                    'address_id' => 28
                ],
                [
                    'first_name' => 'Willdon',
                    'last_name' => 'Edmans',
                    'age' => 67,
                    'phone_number' => '827-668-6385',
                    'pesel' => 90815306218,
                    'weight' => 56,
                    'height' => 164,
                    'doctor_id' => 14,
                    'address_id' => 22
                ],
                [
                    'first_name' => 'Erda',
                    'last_name' => 'Bawden',
                    'age' => 17,
                    'phone_number' => '141-676-7309',
                    'pesel' => 96444302453,
                    'weight' => 107,
                    'height' => 157,
                    'doctor_id' => 18,
                    'address_id' => 70
                ],
                [
                    'first_name' => 'Lyda',
                    'last_name' => 'Lindenbluth',
                    'age' => 40,
                    'phone_number' => '306-143-3833',
                    'pesel' => 91799994334,
                    'weight' => 82,
                    'height' => 166,
                    'doctor_id' => 29,
                    'address_id' => 52
                ],
                [
                    'first_name' => 'Jan',
                    'last_name' => 'Rillstone',
                    'age' => 16,
                    'phone_number' => '751-375-8695',
                    'pesel' => 80140335372,
                    'weight' => 60,
                    'height' => 205,
                    'doctor_id' => 9,
                    'address_id' => 20
                ],
                [
                    'first_name' => 'Florri',
                    'last_name' => 'Lambdon',
                    'age' => 49,
                    'phone_number' => '377-295-6990',
                    'pesel' => 87486042451,
                    'weight' => 75,
                    'height' => 157,
                    'doctor_id' => 27,
                    'address_id' => 79
                ],
                [
                    'first_name' => 'Esmaria',
                    'last_name' => 'Ffoulkes',
                    'age' => 51,
                    'phone_number' => '617-200-2458',
                    'pesel' => 88915799399,
                    'weight' => 98,
                    'height' => 202,
                    'doctor_id' => 28,
                    'address_id' => 19
                ],
                [
                    'first_name' => 'Ado',
                    'last_name' => 'Matt',
                    'age' => 52,
                    'phone_number' => '871-649-0603',
                    'pesel' => 88370174825,
                    'weight' => 87,
                    'height' => 182,
                    'doctor_id' => 13,
                    'address_id' => 75
                ],
                [
                    'first_name' => 'Holly',
                    'last_name' => 'Mosco',
                    'age' => 32,
                    'phone_number' => '796-686-5656',
                    'pesel' => 84083021131,
                    'weight' => 84,
                    'height' => 150,
                    'doctor_id' => 9,
                    'address_id' => 29
                ],
                [
                    'first_name' => 'Ajay',
                    'last_name' => 'Dyshart',
                    'age' => 46,
                    'phone_number' => '163-576-0387',
                    'pesel' => 94797501680,
                    'weight' => 71,
                    'height' => 198,
                    'doctor_id' => 24,
                    'address_id' => 53
                ],
                [
                    'first_name' => 'Rodolphe',
                    'last_name' => 'Armall',
                    'age' => 34,
                    'phone_number' => '692-810-8379',
                    'pesel' => 84578256460,
                    'weight' => 84,
                    'height' => 168,
                    'doctor_id' => 18,
                    'address_id' => 66
                ],
                [
                    'first_name' => 'Geoffrey',
                    'last_name' => 'Blaxall',
                    'age' => 27,
                    'phone_number' => '340-538-0097',
                    'pesel' => 97309819623,
                    'weight' => 75,
                    'height' => 168,
                    'doctor_id' => 24,
                    'address_id' => 14
                ],
                [
                    'first_name' => 'Blanch',
                    'last_name' => 'Paolo',
                    'age' => 63,
                    'phone_number' => '200-262-7972',
                    'pesel' => 86749344114,
                    'weight' => 89,
                    'height' => 173,
                    'doctor_id' => 12,
                    'address_id' => 33
                ],
                [
                    'first_name' => 'Donella',
                    'last_name' => 'Guinness',
                    'age' => 57,
                    'phone_number' => '988-780-2595',
                    'pesel' => 91819957595,
                    'weight' => 70,
                    'height' => 191,
                    'doctor_id' => 19,
                    'address_id' => 38
                ],
                [
                    'first_name' => 'Orton',
                    'last_name' => 'Fordyce',
                    'age' => 39,
                    'phone_number' => '846-929-2964',
                    'pesel' => 99128651245,
                    'weight' => 107,
                    'height' => 187,
                    'doctor_id' => 7,
                    'address_id' => 4
                ],
                [
                    'first_name' => 'Melva',
                    'last_name' => 'Snarr',
                    'age' => 27,
                    'phone_number' => '368-899-8837',
                    'pesel' => 86114362740,
                    'weight' => 59,
                    'height' => 177,
                    'doctor_id' => 26,
                    'address_id' => 34
                ],
                [
                    'first_name' => 'Aviva',
                    'last_name' => 'Troman',
                    'age' => 63,
                    'phone_number' => '195-757-3807',
                    'pesel' => 94610768762,
                    'weight' => 65,
                    'height' => 176,
                    'doctor_id' => 30,
                    'address_id' => 3
                ],
                [
                    'first_name' => 'Felicity',
                    'last_name' => 'Sawford',
                    'age' => 67,
                    'phone_number' => '822-143-6100',
                    'pesel' => 91771125589,
                    'weight' => 88,
                    'height' => 203,
                    'doctor_id' => 5,
                    'address_id' => 80
                ],
                [
                    'first_name' => 'Michaella',
                    'last_name' => 'Brandone',
                    'age' => 39,
                    'phone_number' => '447-399-7711',
                    'pesel' => 94880366114,
                    'weight' => 79,
                    'height' => 203,
                    'doctor_id' => 6,
                    'address_id' => 77
                ],
                [
                    'first_name' => 'Bendix',
                    'last_name' => 'Parramore',
                    'age' => 26,
                    'phone_number' => '555-144-8762',
                    'pesel' => 99351439228,
                    'weight' => 57,
                    'height' => 152,
                    'doctor_id' => 9,
                    'address_id' => 28
                ],
                [
                    'first_name' => 'Barn',
                    'last_name' => 'Monery',
                    'age' => 36,
                    'phone_number' => '758-741-4168',
                    'pesel' => 95644451866,
                    'weight' => 97,
                    'height' => 154,
                    'doctor_id' => 29,
                    'address_id' => 42
                ],
                [
                    'first_name' => 'Titos',
                    'last_name' => 'Sturgis',
                    'age' => 59,
                    'phone_number' => '353-834-2080',
                    'pesel' => 96527518481,
                    'weight' => 102,
                    'height' => 173,
                    'doctor_id' => 23,
                    'address_id' => 50
                ],
                [
                    'first_name' => 'Abbye',
                    'last_name' => 'Everall',
                    'age' => 46,
                    'phone_number' => '412-588-8144',
                    'pesel' => 94750379308,
                    'weight' => 73,
                    'height' => 176,
                    'doctor_id' => 14,
                    'address_id' => 40
                ],
                [
                    'first_name' => 'Izaak',
                    'last_name' => 'Littley',
                    'age' => 67,
                    'phone_number' => '224-242-9958',
                    'pesel' => 86768243719,
                    'weight' => 67,
                    'height' => 183,
                    'doctor_id' => 15,
                    'address_id' => 79
                ],
                [
                    'first_name' => 'Eldon',
                    'last_name' => 'Gilyatt',
                    'age' => 69,
                    'phone_number' => '241-973-4466',
                    'pesel' => 82725259795,
                    'weight' => 88,
                    'height' => 198,
                    'doctor_id' => 10,
                    'address_id' => 22
                ],
                [
                    'first_name' => 'Christoforo',
                    'last_name' => 'Spaunton',
                    'age' => 48,
                    'phone_number' => '973-172-0204',
                    'pesel' => 96508095995,
                    'weight' => 94,
                    'height' => 190,
                    'doctor_id' => 20,
                    'address_id' => 38
                ],
                [
                    'first_name' => 'Francois',
                    'last_name' => 'Stiegers',
                    'age' => 44,
                    'phone_number' => '236-867-4737',
                    'pesel' => 83019275350,
                    'weight' => 96,
                    'height' => 173,
                    'doctor_id' => 23,
                    'address_id' => 63
                ],
                [
                    'first_name' => 'Otes',
                    'last_name' => 'Stace',
                    'age' => 67,
                    'phone_number' => '725-399-1090',
                    'pesel' => 78326227521,
                    'weight' => 96,
                    'height' => 180,
                    'doctor_id' => 12,
                    'address_id' => 49
                ],
                [
                    'first_name' => 'Obidiah',
                    'last_name' => 'Wrigley',
                    'age' => 50,
                    'phone_number' => '651-479-3008',
                    'pesel' => 78954156503,
                    'weight' => 90,
                    'height' => 191,
                    'doctor_id' => 15,
                    'address_id' => 3
                ],
                [
                    'first_name' => 'Gerianna',
                    'last_name' => 'Laurence',
                    'age' => 16,
                    'phone_number' => '562-186-9502',
                    'pesel' => 97189299934,
                    'weight' => 110,
                    'height' => 190,
                    'doctor_id' => 3,
                    'address_id' => 83
                ],
                [
                    'first_name' => 'Freeman',
                    'last_name' => 'Gruby',
                    'age' => 31,
                    'phone_number' => '206-358-9483',
                    'pesel' => 95052186398,
                    'weight' => 84,
                    'height' => 203,
                    'doctor_id' => 8,
                    'address_id' => 8
                ],
                [
                    'first_name' => 'Teresina',
                    'last_name' => 'Bloor',
                    'age' => 62,
                    'phone_number' => '957-883-3403',
                    'pesel' => 83417947649,
                    'weight' => 64,
                    'height' => 183,
                    'doctor_id' => 16,
                    'address_id' => 82
                ],
                [
                    'first_name' => 'Sheela',
                    'last_name' => 'McPheat',
                    'age' => 22,
                    'phone_number' => '719-652-8277',
                    'pesel' => 84016711214,
                    'weight' => 89,
                    'height' => 201,
                    'doctor_id' => 5,
                    'address_id' => 94
                ],
                [
                    'first_name' => 'Conn',
                    'last_name' => 'McGiffie',
                    'age' => 57,
                    'phone_number' => '660-455-4692',
                    'pesel' => 88489680517,
                    'weight' => 79,
                    'height' => 160,
                    'doctor_id' => 13,
                    'address_id' => 16
                ],
                [
                    'first_name' => 'Carly',
                    'last_name' => 'Orring',
                    'age' => 53,
                    'phone_number' => '881-884-8680',
                    'pesel' => 99713855852,
                    'weight' => 89,
                    'height' => 170,
                    'doctor_id' => 6,
                    'address_id' => 81
                ],
                [
                    'first_name' => 'Bart',
                    'last_name' => 'Lurriman',
                    'age' => 24,
                    'phone_number' => '125-367-1819',
                    'pesel' => 84122532591,
                    'weight' => 104,
                    'height' => 200,
                    'doctor_id' => 4,
                    'address_id' => 55
                ],
            ]
        );
    }
}
