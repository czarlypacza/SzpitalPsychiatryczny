<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;


class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::withoutForeignKeyConstraints(function () {
            //DB::table('wards')->truncate();
            Address::truncate();
        });

        Address::insert(
            [
                [
                    'voivodeship' => 'kujawsko-pomorskie',
                    'city' => 'Söderhamn',
                    'street' => 'Brickson Park',
                    'house_number'=>'259',
                    'flat_number'=>'93',
                    'postal_code'=>'826 86'
                ],
                [
                    'voivodeship' => 'podlaskie',
                    'city' => 'Richmond',
                    'street' => 'Scoville',
                    'house_number'=>'210',
                    'flat_number'=>'33',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'zachodniopomorskie',
                    'city' => 'Butahai',
                    'street' => 'Raven',
                    'house_number'=>'142',
                    'flat_number'=>'92',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'kujawsko-pomorskie',
                    'city' => 'Pithoro',
                    'street' => 'Lakeland',
                    'house_number'=>'224',
                    'flat_number'=>'83',
                    'postal_code'=>'69060'
                ],
                [
                    'voivodeship' => 'lubuskie',
                    'city' => 'Ar Rumaythīyah',
                    'street' => 'Banding',
                    'house_number'=>'117',
                    'flat_number'=>'45',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'łódzkie',
                    'city' => 'Bjuv',
                    'street' => 'Welch',
                    'house_number'=>'209',
                    'flat_number'=>'57',
                    'postal_code'=>'267 35'
                ],
                [
                    'voivodeship' => 'zachodniopomorskie',
                    'city' => 'Santa Cruz',
                    'street' => 'Ludington',
                    'house_number'=>'272',
                    'flat_number'=>'98',
                    'postal_code'=>'30560'
                ],
                [
                    'voivodeship' => 'dolnośląskie',
                    'city' => 'Puerto Esperanza',
                    'street' => 'Toban',
                    'house_number'=>'308',
                    'flat_number'=>'13',
                    'postal_code'=>'3378'
                ],
                [
                    'voivodeship' => 'warmińsko-mazurskie',
                    'city' => 'Riosucio',
                    'street' => 'Sunnyside',
                    'house_number'=>'228',
                    'flat_number'=>'89',
                    'postal_code'=>'178057'
                ],
                [
                    'voivodeship' => 'pomorskie',
                    'city' => 'Xiadu',
                    'street' => 'Northport',
                    'house_number'=>'259',
                    'flat_number'=>'40',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'wielkopolskie',
                    'city' => 'Fushan',
                    'street' => 'Dennis',
                    'house_number'=>'199',
                    'flat_number'=>'12',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'dolnośląskie',
                    'city' => 'Shifo',
                    'street' => 'Clarendon',
                    'house_number'=>'204',
                    'flat_number'=>'44',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'mazowieckie',
                    'city' => 'Aiximan',
                    'street' => 'Onsgard',
                    'house_number'=>'147',
                    'flat_number'=>'84',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'świętokrzyskie',
                    'city' => 'Kashiwa',
                    'street' => 'Darwin',
                    'house_number'=>'189',
                    'flat_number'=>'73',
                    'postal_code'=>'861-3923'
                ],
                [
                    'voivodeship' => 'podkarpackie',
                    'city' => 'Nedakonice',
                    'street' => 'Alpine',
                    'house_number'=>'188',
                    'flat_number'=>'99',
                    'postal_code'=>'687 38'
                ],
                [
                    'voivodeship' => 'mazowieckie',
                    'city' => 'Agrelo',
                    'street' => 'Eastlawn',
                    'house_number'=>'214',
                    'flat_number'=>'24',
                    'postal_code'=>'4730-300'
                ],
                [
                    'voivodeship' => 'dolnośląskie',
                    'city' => 'Kihancha',
                    'street' => 'Pond',
                    'house_number'=>'111',
                    'flat_number'=>'110',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'podlaskie',
                    'city' => 'Ust’-Dzheguta',
                    'street' => 'Dakota',
                    'house_number'=>'218',
                    'flat_number'=>'85',
                    'postal_code'=>'369312'
                ],
                [
                    'voivodeship' => 'kujawsko-pomorskie',
                    'city' => 'Panitian',
                    'street' => 'Sugar',
                    'house_number'=>'294',
                    'flat_number'=>'82',
                    'postal_code'=>'5309'
                ],
                [
                    'voivodeship' => 'śląskie',
                    'city' => 'Muliang',
                    'street' => 'Jenna',
                    'house_number'=>'241',
                    'flat_number'=>'82',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'dolnośląskie',
                    'city' => 'Bagumbayan',
                    'street' => 'Sutteridge',
                    'house_number'=>'226',
                    'flat_number'=>'37',
                    'postal_code'=>'9810'
                ],
                [
                    'voivodeship' => 'zachodniopomorskie',
                    'city' => 'Estrada',
                    'street' => 'Forster',
                    'house_number'=>'254',
                    'flat_number'=>'28',
                    'postal_code'=>'4600-661'
                ],
                [
                    'voivodeship' => 'opolskie',
                    'city' => 'Pŭrvomaytsi',
                    'street' => 'Oneill',
                    'house_number'=>'156',
                    'flat_number'=>'59',
                    'postal_code'=>'5139'
                ],
                [
                    'voivodeship' => 'dolnośląskie',
                    'city' => 'Caherconlish',
                    'street' => '8th',
                    'house_number'=>'202',
                    'flat_number'=>'98',
                    'postal_code'=>'F45'
                ],
                [
                    'voivodeship' => 'lubuskie',
                    'city' => 'Compiègne',
                    'street' => 'Norway Maple',
                    'house_number'=>'158',
                    'flat_number'=>'34',
                    'postal_code'=>'60204 CEDEX'
                ],
                [
                    'voivodeship' => 'zachodniopomorskie',
                    'city' => 'Miaoya',
                    'street' => 'Barnett',
                    'house_number'=>'197',
                    'flat_number'=>'16',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'podkarpackie',
                    'city' => 'Ore',
                    'street' => 'Hagan',
                    'house_number'=>'123',
                    'flat_number'=>'61',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'łódzkie',
                    'city' => 'Valparaíso',
                    'street' => 'Cottonwood',
                    'house_number'=>'114',
                    'flat_number'=>'108',
                    'postal_code'=>'16880-000'
                ],
                [
                    'voivodeship' => 'dolnośląskie',
                    'city' => 'Condado',
                    'street' => 'Donald',
                    'house_number'=>'168',
                    'flat_number'=>'110',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'pomorskie',
                    'city' => 'Sundsvall',
                    'street' => 'Lakewood',
                    'house_number'=>'266',
                    'flat_number'=>'38',
                    'postal_code'=>'851 06'
                ],
                [
                    'voivodeship' => 'podkarpackie',
                    'city' => 'Canomoy',
                    'street' => 'Cardinal',
                    'house_number'=>'227',
                    'flat_number'=>'77',
                    'postal_code'=>'5411'
                ],
                [
                    'voivodeship' => 'lubuskie',
                    'city' => 'Kulykiv',
                    'street' => 'Thompson',
                    'house_number'=>'257',
                    'flat_number'=>'17',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'lubuskie',
                    'city' => 'Mendes',
                    'street' => 'Jay',
                    'house_number'=>'168',
                    'flat_number'=>'94',
                    'postal_code'=>'26700-000'
                ],
                [
                    'voivodeship' => 'kujawsko-pomorskie',
                    'city' => 'Muleba',
                    'street' => 'Hermina',
                    'house_number'=>'239',
                    'flat_number'=>'74',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'łódzkie',
                    'city' => 'Mabasa',
                    'street' => 'Melvin',
                    'house_number'=>'328',
                    'flat_number'=>'86',
                    'postal_code'=>'3707'
                ],
                [
                    'voivodeship' => 'mazowieckie',
                    'city' => 'Bonga',
                    'street' => 'Doe Crossing',
                    'house_number'=>'250',
                    'flat_number'=>'68',
                    'postal_code'=>'5504'
                ],
                [
                    'voivodeship' => 'śląskie',
                    'city' => 'Ubinskoye',
                    'street' => 'Dorton',
                    'house_number'=>'245',
                    'flat_number'=>'109',
                    'postal_code'=>'632520'
                ],
                [
                    'voivodeship' => 'śląskie',
                    'city' => 'Krajan Alastengah',
                    'street' => 'Oakridge',
                    'house_number'=>'282',
                    'flat_number'=>'68',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'śląskie',
                    'city' => 'Baita',
                    'street' => 'Springs',
                    'house_number'=>'220',
                    'flat_number'=>'91',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'pomorskie',
                    'city' => 'Taocun',
                    'street' => 'Park Meadow',
                    'house_number'=>'147',
                    'flat_number'=>'66',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'podkarpackie',
                    'city' => 'Lefengzhen',
                    'street' => 'North',
                    'house_number'=>'182',
                    'flat_number'=>'90',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'lubuskie',
                    'city' => 'Västervik',
                    'street' => 'Nova',
                    'house_number'=>'119',
                    'flat_number'=>'68',
                    'postal_code'=>'593 30'
                ],
                [
                    'voivodeship' => 'świętokrzyskie',
                    'city' => 'Ramada',
                    'street' => 'West',
                    'house_number'=>'154',
                    'flat_number'=>'54',
                    'postal_code'=>'2620-188'
                ],
                [
                    'voivodeship' => 'lubelskie',
                    'city' => 'Bayuin',
                    'street' => 'Oakridge',
                    'house_number'=>'171',
                    'flat_number'=>'45',
                    'postal_code'=>'4324'
                ],
                [
                    'voivodeship' => 'małopolskie',
                    'city' => 'Kintinku',
                    'street' => 'Schurz',
                    'house_number'=>'114',
                    'flat_number'=>'96',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'opolskie',
                    'city' => 'Dak Glei',
                    'street' => 'Springview',
                    'house_number'=>'277',
                    'flat_number'=>'93',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'pomorskie',
                    'city' => 'Baruunturuun',
                    'street' => 'Alpine',
                    'house_number'=>'284',
                    'flat_number'=>'83',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'mazowieckie',
                    'city' => 'Antony',
                    'street' => 'Troy',
                    'house_number'=>'250',
                    'flat_number'=>'23',
                    'postal_code'=>'92169 CEDEX'
                ],
                [
                    'voivodeship' => 'podlaskie',
                    'city' => 'Payxambabazar',
                    'street' => 'Shasta',
                    'house_number'=>'152',
                    'flat_number'=>'35',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'opolskie',
                    'city' => 'São Miguel do Iguaçu',
                    'street' => 'Fair Oaks',
                    'house_number'=>'120',
                    'flat_number'=>'42',
                    'postal_code'=>'85877-000'
                ],
                [
                    'voivodeship' => 'lubuskie',
                    'city' => 'Goz Béïda',
                    'street' => 'Acker',
                    'house_number'=>'192',
                    'flat_number'=>'64',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'łódzkie',
                    'city' => 'Alejal',
                    'street' => 'Gerald',
                    'house_number'=>'290',
                    'flat_number'=>'100',
                    'postal_code'=>'9205'
                ],
                [
                    'voivodeship' => 'wielkopolskie',
                    'city' => 'Zavetnoye',
                    'street' => 'Express',
                    'house_number'=>'184',
                    'flat_number'=>'71',
                    'postal_code'=>'357014'
                ],
                [
                    'voivodeship' => 'pomorskie',
                    'city' => 'Bueng Kum',
                    'street' => 'Warbler',
                    'house_number'=>'157',
                    'flat_number'=>'74',
                    'postal_code'=>'10240'
                ],
                [
                    'voivodeship' => 'łódzkie',
                    'city' => 'Naberezhnyye Chelny',
                    'street' => 'Carberry',
                    'house_number'=>'181',
                    'flat_number'=>'20',
                    'postal_code'=>'423555'
                ],
                [
                    'voivodeship' => 'lubelskie',
                    'city' => 'Panguna',
                    'street' => 'Emmet',
                    'house_number'=>'153',
                    'flat_number'=>'111',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'podkarpackie',
                    'city' => 'Los Cerrillos',
                    'street' => 'Lerdahl',
                    'house_number'=>'136',
                    'flat_number'=>'100',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'mazowieckie',
                    'city' => 'Baon',
                    'street' => 'Summer Ridge',
                    'house_number'=>'214',
                    'flat_number'=>'41',
                    'postal_code'=>'2436'
                ],
                [
                    'voivodeship' => 'wielkopolskie',
                    'city' => 'Jumpangdua',
                    'street' => 'Prairieview',
                    'house_number'=>'249',
                    'flat_number'=>'15',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'świętokrzyskie',
                    'city' => 'Bystrzyca',
                    'street' => 'Weeping Birch',
                    'house_number'=>'303',
                    'flat_number'=>'101',
                    'postal_code'=>'60-852'
                ],
                [
                    'voivodeship' => 'wielkopolskie',
                    'city' => 'Gawanan',
                    'street' => 'Westport',
                    'house_number'=>'290',
                    'flat_number'=>'89',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'śląskie',
                    'city' => 'Rashaant',
                    'street' => 'Pleasure',
                    'house_number'=>'323',
                    'flat_number'=>'59',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'małopolskie',
                    'city' => 'Halayhayin',
                    'street' => 'Brown',
                    'house_number'=>'325',
                    'flat_number'=>'80',
                    'postal_code'=>'4010'
                ],
                [
                    'voivodeship' => 'świętokrzyskie',
                    'city' => 'Sanquan',
                    'street' => 'Sunbrook',
                    'house_number'=>'119',
                    'flat_number'=>'25',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'śląskie',
                    'city' => 'Izobil’nyy',
                    'street' => 'Mitchell',
                    'house_number'=>'251',
                    'flat_number'=>'60',
                    'postal_code'=>'347674'
                ],
                [
                    'voivodeship' => 'zachodniopomorskie',
                    'city' => 'Mariestad',
                    'street' => 'Morrow',
                    'house_number'=>'326',
                    'flat_number'=>'44',
                    'postal_code'=>'542 87'
                ],
                [
                    'voivodeship' => 'lubuskie',
                    'city' => 'Toyota',
                    'street' => 'Loftsgordon',
                    'house_number'=>'268',
                    'flat_number'=>'41',
                    'postal_code'=>'952-0317'
                ],
                [
                    'voivodeship' => 'dolnośląskie',
                    'city' => 'Jembayan Hitam',
                    'street' => 'Jay',
                    'house_number'=>'178',
                    'flat_number'=>'18',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'lubelskie',
                    'city' => 'Kallithéa',
                    'street' => 'Northview',
                    'house_number'=>'160',
                    'flat_number'=>'104',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'podlaskie',
                    'city' => 'Živinice',
                    'street' => 'Declaration',
                    'house_number'=>'189',
                    'flat_number'=>'63',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'łódzkie',
                    'city' => 'Candelaria',
                    'street' => 'South',
                    'house_number'=>'236',
                    'flat_number'=>'101',
                    'postal_code'=>'111711'
                ],
                [
                    'voivodeship' => 'pomorskie',
                    'city' => 'Lasusua',
                    'street' => 'Pierstorff',
                    'house_number'=>'269',
                    'flat_number'=>'71',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'pomorskie',
                    'city' => 'Borzytuchom',
                    'street' => 'Sheridan',
                    'house_number'=>'263',
                    'flat_number'=>'93',
                    'postal_code'=>'77-141'
                ],
                [
                    'voivodeship' => 'kujawsko-pomorskie',
                    'city' => 'Kertasari',
                    'street' => 'Tennyson',
                    'house_number'=>'117',
                    'flat_number'=>'15',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'podkarpackie',
                    'city' => 'Dongfeng',
                    'street' => 'Shelley',
                    'house_number'=>'256',
                    'flat_number'=>'64',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'podlaskie',
                    'city' => 'Mandapajaya',
                    'street' => 'Corry',
                    'house_number'=>'282',
                    'flat_number'=>'66',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'opolskie',
                    'city' => 'Hedaru',
                    'street' => 'Hermina',
                    'house_number'=>'274',
                    'flat_number'=>'38',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'podkarpackie',
                    'city' => 'Maria Cristina',
                    'street' => 'Dahle',
                    'house_number'=>'186',
                    'flat_number'=>'100',
                    'postal_code'=>'9201'
                ],
                [
                    'voivodeship' => 'małopolskie',
                    'city' => 'Mapiripán',
                    'street' => 'Bay',
                    'house_number'=>'202',
                    'flat_number'=>'96',
                    'postal_code'=>'943057'
                ],
                [
                    'voivodeship' => 'podkarpackie',
                    'city' => '‘Arīqah',
                    'street' => 'Marcy',
                    'house_number'=>'159',
                    'flat_number'=>'105',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'łódzkie',
                    'city' => 'Rahama',
                    'street' => 'Delladonna',
                    'house_number'=>'114',
                    'flat_number'=>'32',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'dolnośląskie',
                    'city' => 'Hualin',
                    'street' => 'Oxford',
                    'house_number'=>'245',
                    'flat_number'=>'11',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'kujawsko-pomorskie',
                    'city' => 'Zheleznogorsk',
                    'street' => 'Canary',
                    'house_number'=>'215',
                    'flat_number'=>'78',
                    'postal_code'=>'307156'
                ],
                [
                    'voivodeship' => 'wielkopolskie',
                    'city' => 'Paya Dapur',
                    'street' => 'Emmet',
                    'house_number'=>'232',
                    'flat_number'=>'26',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'lubuskie',
                    'city' => 'Norfolk',
                    'street' => 'Reinke',
                    'house_number'=>'327',
                    'flat_number'=>'74',
                    'postal_code'=>'23514'
                ],
                [
                    'voivodeship' => 'śląskie',
                    'city' => 'Gaplek',
                    'street' => '7th',
                    'house_number'=>'175',
                    'flat_number'=>'48',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'lubelskie',
                    'city' => 'Geldrop',
                    'street' => 'Hauk',
                    'house_number'=>'293',
                    'flat_number'=>'41',
                    'postal_code'=>'5664'
                ],
                [
                    'voivodeship' => 'warmińsko-mazurskie',
                    'city' => 'Changping',
                    'street' => 'Erie',
                    'house_number'=>'260',
                    'flat_number'=>'30',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'lubuskie',
                    'city' => 'Ust’-Katav',
                    'street' => 'Ilene',
                    'house_number'=>'300',
                    'flat_number'=>'17',
                    'postal_code'=>'456049'
                ],
                [
                    'voivodeship' => 'dolnośląskie',
                    'city' => 'Kłomnice',
                    'street' => 'Westerfield',
                    'house_number'=>'118',
                    'flat_number'=>'33',
                    'postal_code'=>'42-270'
                ],
                [
                    'voivodeship' => 'łódzkie',
                    'city' => 'Enniskerry',
                    'street' => 'Fuller',
                    'house_number'=>'169',
                    'flat_number'=>'54',
                    'postal_code'=>'D18'
                ],
                [
                    'voivodeship' => 'lubuskie',
                    'city' => 'Kampungbajo',
                    'street' => 'Debra',
                    'house_number'=>'285',
                    'flat_number'=>'20',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'podkarpackie',
                    'city' => 'Wang Sam Mo',
                    'street' => 'Porter',
                    'house_number'=>'296',
                    'flat_number'=>'22',
                    'postal_code'=>'41380'
                ],
                [
                    'voivodeship' => 'podkarpackie',
                    'city' => 'Fenghuanglu',
                    'street' => 'Algoma',
                    'house_number'=>'127',
                    'flat_number'=>'101',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'śląskie',
                    'city' => 'Ribeirópolis',
                    'street' => 'Monica',
                    'house_number'=>'319',
                    'flat_number'=>'55',
                    'postal_code'=>'49530-000'
                ],
                [
                    'voivodeship' => 'podlaskie',
                    'city' => 'Haolaishan',
                    'street' => 'South',
                    'house_number'=>'272',
                    'flat_number'=>'57',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'lubuskie',
                    'city' => 'Fengshuling',
                    'street' => 'Dennis',
                    'house_number'=>'225',
                    'flat_number'=>'28',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'wielkopolskie',
                    'city' => 'Chengxi',
                    'street' => 'Dahle',
                    'house_number'=>'189',
                    'flat_number'=>'106',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'opolskie',
                    'city' => 'Shurugwi',
                    'street' => 'Hansons',
                    'house_number'=>'156',
                    'flat_number'=>'19',
                    'postal_code'=>'7090'
                ],
                [
                    'voivodeship' => 'mazowieckie',
                    'city' => 'Melrose',
                    'street' => 'Alpine',
                    'house_number'=>'255',
                    'flat_number'=>'100',
                    'postal_code'=>'41380'
                ],
            ]
        );

    }
}
