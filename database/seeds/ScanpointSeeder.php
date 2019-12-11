<?php

use Illuminate\Database\Seeder;

class ScanpointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    /*
        Department_id 1 = Calp
        Department_id 2 = Puma C
        Department_id 3 = ETL/AWZ
        Department_id 4 = MaXpro
    */
    {
        /*
           --------------->Start Department Calp<---------------
        */
        DB::table('scanpoints')->insert([
            'id'        => '1',
            'barcode'   => 'P0061',
            'location'   => 'G27 begaande grond op bediening kast van P-2610 WMQ naar PP',
            'department_id' => '1',
        ]);
        DB::table('scanpoints')->insert([
            'id'        => '2',
            'barcode'   => 'P0063',
            'location'   => 'G25 begaande grond op bediening kast van P-3229',
            'department_id' => '1'
        ]);
        DB::table('scanpoints')->insert([
            'id'        => '3',
            'barcode'   => 'P0067',
            'location'   => 'G27-1 op de Scrubber van poederstort',
            'department_id' => '1'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '4',
            'barcode'   => 'P0069',
            'location'   => 'G28-1 op kast naast P-3221 achter T-3214',
            'department_id' => '1'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '5',
            'barcode'   => 'P0073',
            'location'   => 'G28-2 op steunpaal van T-3211 boven UV-unit',
            'department_id' => '1'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '6',
            'barcode'   => 'P0076',
            'location'   => 'G50 - Calimiteitenbak Buffertanks T-3212/13 op lantaarnpaal naast bediening dompelpomp naar riool',
            'department_id' => '1'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '7',
            'barcode'   => 'P0077',
            'location'   => 'G69-0 Feedruimte op muur tussen V-371115/16 naast raam',
            'department_id' => '1'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '8',
            'barcode'   => 'P0081',
            'location'   => 'G69-1 Cipkitchen op RVS PLC kast',
            'department_id' => '1'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '9',
            'barcode'   => 'P0082',
            'location'   => 'G69-2 op paal van cycloon van recyclesilo',
            'department_id' => '1'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '10',
            'barcode'   => 'P0085',
            'location'   => 'G69-4 op glazenkooi bovenop de toren',
            'department_id' => '1'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '11',
            'barcode'   => 'P0085',
            'location'   => 'G69-4 op glazenkooi bovenop de toren',
            'department_id' => '1'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '12',
            'barcode'   => 'P0087',
            'location'   => 'G69-5 op de skit van uitlaat Exhaustfan op dak',
            'department_id' => '1'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '13',
            'barcode'   => 'P0088',
            'location'   => 'G81-0 op muur nabij KCin afpak aansluiting',
            'department_id' => '1'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '14',
            'barcode'   => 'P0089',
            'location'   => 'G81-0 buiten bij rioolput op afleespaneel',
            'department_id' => '1'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '15',
            'barcode'   => 'P0091',
            'location'   => 'G81-0 op paal bij filter F-3757',
            'department_id' => '1'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '16',
            'barcode'   => 'P0093',
            'location'   => 'G51-0 op RVS kast tussen transporttrechter en BB transport',
            'department_id' => '1'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '17',
            'barcode'   => 'P0094',
            'location'   => '51-1 op hydrauliekkast X-3553',
            'department_id' => '1'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '18',
            'barcode'   => 'P0311',
            'location'   => 'G51-1 tegen muur bij Azo-zeef',
            'department_id' => '1'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '19',
            'barcode'   => 'P0097',
            'location'   => 'G51-2 op kast naast linker filterkamer',
            'department_id' => '1'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '20',
            'barcode'   => 'P0099',
            'location'   => 'G51-2 op kast naast P-3504',
            'department_id' => '1'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '21',
            'barcode'   => 'P0100',
            'location'   => 'G51-3 op RVS kast naast Hopper',
            'department_id' => '1'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '22',
            'barcode'   => 'P0185',
            'location'   => 'G72-0 binnen in gebouw',
            'department_id' => '1'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '23',
            'barcode'   => 'P0261',
            'location'   => 'G49-0 op steunpaal losleiding van beide loogtanks',
            'department_id' => '1'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '24',
            'barcode'   => 'P0270',
            'location'   => 'G-69-3 op kast van B-378404',
            'department_id' => '1'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '25',
            'barcode'   => 'P0271',
            'location'   => 'G69-1 op HVAC leiding naast trap Russelzeven bordes',
            'department_id' => '1'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '26',
            'barcode'   => 'P0315',
            'location'   => 'Bordes Kristallisatoren',
            'department_id' => '1'
        ]);

        /*
           --------------->End Department Calp<---------------
        */

        /*
           --------------->Start Department Puma C<---------------
        */
        DB::table('scanpoints')->insert([
            'id'        => '27',
            'barcode'   => 'P0122',
            'location'   => 'G21-1 Vacuumpompen bandfilters tussen P-2334/35',
            'department_id' => '2'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '28',
            'barcode'   => 'P0124',
            'location'   => 'G20-2 Bandfilter. achter in de hoek bij F-2407',
            'department_id' => '2'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '29',
            'barcode'   => 'P0135',
            'location'   => 'G26-Suikerhok T-1101/T-1102 op weegmetingkast 11-WIT-101 van T-1101',
            'department_id' => '2'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '30',
            'barcode'   => 'P0161',
            'location'   => 'G35-2 Cobra filters op tracingkast F-2201/2',
            'department_id' => '2'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '31',
            'barcode'   => 'P0164',
            'location'   => 'G33-0 op steun naast P-2241/42 circulatie filters',
            'department_id' => '2'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '32',
            'barcode'   => 'P0187',
            'location'   => 'G43 HCL-tank 1502 losplaats naast P1501 voor P-1503',
            'department_id' => '2'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '33',
            'barcode'   => 'P0188',
            'location'   => 'G43 NaOH tank T-1405 losplaats naast pomp op tracingkast',
            'department_id' => '2'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '34',
            'barcode'   => 'P0189',
            'location'   => 'Kalksilo Kalksilo onder de silo op PLC-kast OK-1302',
            'department_id' => '2'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '35',
            'barcode'   => 'P0190',
            'location'   => 'G17-0 Kalkgebouw op motorkast naast T-1305',
            'department_id' => '2'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '36',
            'barcode'   => 'P0191',
            'location'   => 'CHem.hok G17 Chemicalien koelwater lagedruk thv doseervat',
            'department_id' => '2'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '37',
            'barcode'   => 'P0192',
            'location'   => 'G21-B aflaattank tussen de pompen onder ws',
            'department_id' => '2'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '38',
            'barcode'   => 'P0195',
            'location'   => 'G35-0 P-1312 in de doos kalkpomp paal bij pomp',
            'department_id' => '2'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '39',
            'barcode'   => 'P0199',
            'location'   => 'G19-0 waterverdeling hydro4unit op PLC kast',
            'department_id' => '2'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '40',
            'barcode'   => 'P0202',
            'location'   => 'G33-1 T-2210/T-2211 op bovenkant T-2210',
            'department_id' => '2'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '41',
            'barcode'   => 'P0278',
            'location'   => 'G16-2 Crystallizer 2e verdieping. Voorbij CP-2560',
            'department_id' => '2'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '42',
            'barcode'   => 'P0277',
            'location'   => 'G16-1 Crystallizer 1e verdieping. Op paal bij T-2560 tegenover T-2531',
            'department_id' => '2'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '43',
            'barcode'   => 'P0279',
            'location'   => 'G19-1 Persfilter F-2450 1e verdieping. Naast T-2452 en trap naar filter toe',
            'department_id' => '2'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '44',
            'barcode'   => 'P0280',
            'location'   => 'G19-0 Swaps naast R-2404',
            'department_id' => '2'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '45',
            'barcode'   => 'P0282',
            'location'   => 'G16-0 tegenover cristallyzer bij T2552 op oude koeler',
            'department_id' => '2'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '46',
            'barcode'   => 'P0283',
            'location'   => 'G21-F T-8711 + compressor persfilter op de paal',
            'department_id' => '2'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '47',
            'barcode'   => 'P0284',
            'location'   => 'G33-0 T-1308 op paal naast trap',
            'department_id' => '2'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '48',
            'barcode'   => 'P0310',
            'location'   => 'G33-1 Alkalische tanks T-2201/T-2202 bij cyclonen',
            'department_id' => '2'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '49',
            'barcode'   => 'P0312',
            'location'   => 'G21-1 Op skit van hydrocyclonen',
            'department_id' => '2'
        ]);

         DB::table('scanpoints')->insert([
            'id'        => '50',
            'barcode'   => 'P0313',
            'location'   => 'G22-0 Cip zuurtank T-2570',
            'department_id' => '2'
        ]);

        /*
           --------------->End Department Puma C<---------------
        */

        /*
           --------------->Start Department ETL/AWZ<---------------
        */

         DB::table('scanpoints')->insert([
            'id'        => '51',
            'barcode'   => 'P0128',
            'location'   => 'Losplaatst 2 Buiten bij Alka tanks en Ferm.13 tm 16',
            'department_id' => '3'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '52',
            'barcode'   => 'P0163',
            'location'   => 'G64-1 op T-2917 naast bordes, T-2915/18 monstername',
            'department_id' => '3'
        ]);

         DB::table('scanpoints')->insert([
            'id'        => '53',
            'barcode'   => 'P0165',
            'location'   => 'G34-0 tussen P-2204/9 bij T-2204',
            'department_id' => '3'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '54',
            'barcode'   => 'P0167',
            'location'   => 'G36-0 OWR 2>BG naast sticker brand/explosie gevaar OWR 2',
            'department_id' => '3'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '55',
            'barcode'   => 'P0166',
            'location'   => 'G36-0 op paal bij Put B',
            'department_id' => '3'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '56',
            'barcode'   => 'P0170',
            'location'   => 'Op motorkast P-8109 bij damwand Egalisatietank',
            'department_id' => '3'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '57',
            'barcode'   => 'P0171',
            'location'   => 'G61-0 T-2824/25/26 op steun lantaarnpaal bij T-2826',
            'department_id' => '3'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '58',
            'barcode'   => 'P0172',
            'location'   => 'G44-0 chemicalien middendruk doseerpomp chloorbleekloog',
            'department_id' => '3'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '59',
            'barcode'   => 'P0173',
            'location'   => 'G61-0 T-2848/53 naast trap op paal tl-lamp',
            'department_id' => '3'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '60',
            'barcode'   => 'P0174',
            'location'   => 'G10-0 chemicalienkoeltorens naast doseerpompjes',
            'department_id' => '3'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '61',
            'barcode'   => 'P0275',
            'location'   => 'G86-A filtratie gebouw koeltorens op reling voor PLC kast',
            'department_id' => '3'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '62',
            'barcode'   => 'P0178',
            'location'   => 'G70-0 R-8103 aneroob op EX-bord bij chemiclien',
            'department_id' => '3'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '63',
            'barcode'   => 'P0180',
            'location'   => 'G63-0 P-8119 afwater gemeente op persleiding onder manometer',
            'department_id' => '3'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '64',
            'barcode'   => 'P0181',
            'location'   => 'G62-0 Dekanter gebouw zijkant PLC kast boven flocculantbak',
            'department_id' => '3'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '65',
            'barcode'   => 'P0182',
            'location'   => 'G10-0 P-8116 naast put C onder pomp',
            'department_id' => '3'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '66',
            'barcode'   => 'P0183',
            'location'   => 'G32-0 C-2705 op EX-bord ingang pharma',
            'department_id' => '3'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '67',
            'barcode'   => 'P0186',
            'location'   => 'G10-0 monsterhok AWZ 9 boven de wasbak',
            'department_id' => '3'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '68',
            'barcode'   => 'P0200',
            'location'   => 'G32-0 P-2737 buiten de bak op paal naast rode blusleiding',
            'department_id' => '3'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '69',
            'barcode'   => 'P0314',
            'location'   => 'T-8127. Tegenover monsterhok bij gat in de heg.',
            'department_id' => '3'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '70',
            'barcode'   => 'P1171',
            'location'   => 'G61-0 T-2824/25/26 op steun lantaarnpaal bij T-2826',
            'department_id' => '3'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '71',
            'barcode'   => 'P1172',
            'location'   => 'Test',
            'department_id' => '3'
        ]);

        /*
           --------------->End Department ETL/AWZ<---------------
        */

        /*
           --------------->Start Department MaXpro<---------------
        */

        DB::table('scanpoints')->insert([
            'id'        => '72',
            'barcode'   => 'P0263',
            'location'   => 'G14-0 T-4801/2 op blauwe motorkast',
            'department_id' => '4'
        ]);

        DB::table('scanpoints')->insert([
            'id'        => '73',
            'barcode'   => 'P0285',
            'location'   => 'G14-1 Natronloogtank T-1409. Op paal bij raam',
            'department_id' => '4'
        ]);

        /*
           --------------->End Department MaXpro<---------------
        */


    }
}
