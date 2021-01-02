<?php

use Illuminate\Database\Seeder;

class IncredientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('incredients')->delete();
        
        \DB::table('incredients')->insert(array (
            0 => 
            array (
                'id' => 2,
                'incredient_de' => 'Tomate/n',
                'grocery_division_id' => 1,
                'food_group_id' => 2,
                'created_at' => '2020-12-12 22:34:48',
                'updated_at' => '2020-12-13 17:21:58',
            ),
            1 => 
            array (
                'id' => 3,
                'incredient_de' => 'Knoblauchzehe/n',
                'grocery_division_id' => 1,
                'food_group_id' => 2,
                'created_at' => '2020-12-13 17:20:36',
                'updated_at' => '2020-12-13 17:20:47',
            ),
            2 => 
            array (
                'id' => 4,
                'incredient_de' => 'Chorizo',
                'grocery_division_id' => 2,
                'food_group_id' => 6,
                'created_at' => '2020-12-13 17:22:41',
                'updated_at' => '2020-12-13 17:22:41',
            ),
            3 => 
            array (
                'id' => 5,
                'incredient_de' => 'Sahne, süße',
                'grocery_division_id' => 2,
                'food_group_id' => 5,
                'created_at' => '2020-12-13 17:23:17',
                'updated_at' => '2020-12-20 16:41:13',
            ),
            4 => 
            array (
                'id' => 6,
                'incredient_de' => 'Avocado/s',
                'grocery_division_id' => 1,
                'food_group_id' => 2,
                'created_at' => '2020-12-13 17:24:26',
                'updated_at' => '2020-12-13 17:24:38',
            ),
            5 => 
            array (
                'id' => 7,
                'incredient_de' => 'Schnittlauch',
                'grocery_division_id' => 1,
                'food_group_id' => 31,
                'created_at' => '2020-12-13 17:25:17',
                'updated_at' => '2020-12-20 16:42:41',
            ),
            6 => 
            array (
                'id' => 8,
                'incredient_de' => 'Hokkaidokürbis',
                'grocery_division_id' => 1,
                'food_group_id' => 2,
                'created_at' => '2020-12-13 17:25:45',
                'updated_at' => '2020-12-13 17:25:45',
            ),
            7 => 
            array (
                'id' => 9,
                'incredient_de' => 'Zwiebel/n',
                'grocery_division_id' => 1,
                'food_group_id' => 2,
                'created_at' => '2020-12-13 17:26:06',
                'updated_at' => '2020-12-13 17:26:14',
            ),
            8 => 
            array (
                'id' => 10,
                'incredient_de' => 'Apfel',
                'grocery_division_id' => 1,
                'food_group_id' => 10,
                'created_at' => '2020-12-13 17:29:26',
                'updated_at' => '2020-12-19 17:39:33',
            ),
            9 => 
            array (
                'id' => 11,
                'incredient_de' => 'Petersilie',
                'grocery_division_id' => 1,
                'food_group_id' => 31,
                'created_at' => '2020-12-13 17:29:43',
                'updated_at' => '2020-12-20 16:38:49',
            ),
            10 => 
            array (
                'id' => 13,
                'incredient_de' => 'Frühstücksspeck',
                'grocery_division_id' => 2,
                'food_group_id' => 6,
                'created_at' => '2020-12-13 17:31:31',
                'updated_at' => '2020-12-13 17:31:31',
            ),
            11 => 
            array (
                'id' => 14,
                'incredient_de' => 'Birne/n',
                'grocery_division_id' => 1,
                'food_group_id' => 10,
                'created_at' => '2020-12-13 17:31:55',
                'updated_at' => '2020-12-13 17:32:02',
            ),
            12 => 
            array (
                'id' => 15,
                'incredient_de' => 'Frühlingszwiebeln',
                'grocery_division_id' => 1,
                'food_group_id' => 2,
                'created_at' => '2020-12-13 17:32:45',
                'updated_at' => '2020-12-13 17:32:45',
            ),
            13 => 
            array (
                'id' => 16,
                'incredient_de' => 'Lolo Rosso Salat',
                'grocery_division_id' => 1,
                'food_group_id' => 2,
                'created_at' => '2020-12-13 17:33:03',
                'updated_at' => '2020-12-13 17:33:33',
            ),
            14 => 
            array (
                'id' => 17,
                'incredient_de' => 'Tomate/n, Kirsch-',
                'grocery_division_id' => 1,
                'food_group_id' => 2,
                'created_at' => '2020-12-13 17:33:51',
                'updated_at' => '2020-12-13 17:34:12',
            ),
            15 => 
            array (
                'id' => 18,
                'incredient_de' => 'Ziegenfrischkäse',
                'grocery_division_id' => 2,
                'food_group_id' => 7,
                'created_at' => '2020-12-13 17:34:39',
                'updated_at' => '2020-12-13 17:34:39',
            ),
            16 => 
            array (
                'id' => 19,
                'incredient_de' => 'Salz',
                'grocery_division_id' => 5,
                'food_group_id' => 32,
                'created_at' => '2020-12-13 17:35:30',
                'updated_at' => '2020-12-20 16:41:55',
            ),
            17 => 
            array (
                'id' => 21,
                'incredient_de' => 'Mandeln, gemahlen',
                'grocery_division_id' => 3,
                'food_group_id' => 33,
                'created_at' => '2020-12-19 20:33:37',
                'updated_at' => '2020-12-20 16:36:08',
            ),
            18 => 
            array (
                'id' => 22,
                'incredient_de' => 'Tomate/n, Dosen-',
                'grocery_division_id' => 4,
                'food_group_id' => 8,
                'created_at' => '2020-12-19 20:34:22',
                'updated_at' => '2020-12-19 20:34:22',
            ),
            19 => 
            array (
                'id' => 23,
                'incredient_de' => 'Zwiebel/n, rot',
                'grocery_division_id' => 1,
                'food_group_id' => 2,
                'created_at' => '2020-12-19 20:34:45',
                'updated_at' => '2020-12-19 20:34:45',
            ),
            20 => 
            array (
                'id' => 24,
                'incredient_de' => 'Bohnen, weiße, Dose',
                'grocery_division_id' => 4,
                'food_group_id' => 8,
                'created_at' => '2020-12-19 20:36:15',
                'updated_at' => '2020-12-19 20:36:15',
            ),
            21 => 
            array (
                'id' => 27,
                'incredient_de' => 'Spaghetti',
                'grocery_division_id' => 5,
                'food_group_id' => 4,
                'created_at' => '2020-12-19 20:41:31',
                'updated_at' => '2020-12-20 16:44:18',
            ),
            22 => 
            array (
                'id' => 28,
                'incredient_de' => 'Radicchio',
                'grocery_division_id' => 1,
                'food_group_id' => 2,
                'created_at' => '2020-12-19 20:41:51',
                'updated_at' => '2020-12-19 20:41:51',
            ),
            23 => 
            array (
                'id' => 29,
                'incredient_de' => 'Parmesan',
                'grocery_division_id' => 2,
                'food_group_id' => 7,
                'created_at' => '2020-12-19 20:42:13',
                'updated_at' => '2020-12-19 20:42:13',
            ),
            24 => 
            array (
                'id' => 30,
                'incredient_de' => 'Oliven, schwarz',
                'grocery_division_id' => 4,
                'food_group_id' => 8,
                'created_at' => '2020-12-19 20:42:47',
                'updated_at' => '2020-12-20 16:37:19',
            ),
            25 => 
            array (
                'id' => 31,
                'incredient_de' => 'Oliven, grün',
                'grocery_division_id' => 4,
                'food_group_id' => 8,
                'created_at' => '2020-12-19 20:43:00',
                'updated_at' => '2020-12-20 16:36:57',
            ),
            26 => 
            array (
                'id' => 32,
                'incredient_de' => 'Schalotte/n',
                'grocery_division_id' => 1,
                'food_group_id' => 2,
                'created_at' => '2020-12-19 20:43:26',
                'updated_at' => '2020-12-19 20:43:26',
            ),
            27 => 
            array (
                'id' => 33,
                'incredient_de' => 'Butter',
                'grocery_division_id' => 2,
                'food_group_id' => 5,
                'created_at' => '2020-12-19 20:43:41',
                'updated_at' => '2020-12-19 20:43:41',
            ),
            28 => 
            array (
                'id' => 35,
                'incredient_de' => 'Tagliatelle',
                'grocery_division_id' => 5,
                'food_group_id' => 4,
                'created_at' => '2020-12-19 20:45:26',
                'updated_at' => '2020-12-20 16:44:43',
            ),
            29 => 
            array (
                'id' => 36,
                'incredient_de' => 'Mozzarella',
                'grocery_division_id' => 2,
                'food_group_id' => 7,
                'created_at' => '2020-12-19 20:45:50',
                'updated_at' => '2020-12-19 20:45:50',
            ),
            30 => 
            array (
                'id' => 37,
                'incredient_de' => 'Spinat, Blatt-, TK',
                'grocery_division_id' => 7,
                'food_group_id' => 2,
                'created_at' => '2020-12-19 20:46:28',
                'updated_at' => '2020-12-19 20:48:20',
            ),
            31 => 
            array (
                'id' => 38,
                'incredient_de' => 'Tortellini',
                'grocery_division_id' => 5,
                'food_group_id' => 4,
                'created_at' => '2020-12-19 20:47:06',
                'updated_at' => '2020-12-20 16:45:27',
            ),
            32 => 
            array (
                'id' => 39,
                'incredient_de' => 'Gorgonzola',
                'grocery_division_id' => 2,
                'food_group_id' => 7,
                'created_at' => '2020-12-19 20:48:56',
                'updated_at' => '2020-12-19 20:48:56',
            ),
            33 => 
            array (
                'id' => 40,
                'incredient_de' => 'Pinienkerne',
                'grocery_division_id' => 3,
                'food_group_id' => 33,
                'created_at' => '2020-12-19 20:49:30',
                'updated_at' => '2020-12-20 16:39:19',
            ),
            34 => 
            array (
                'id' => 41,
                'incredient_de' => 'Tomate/n, getrocknet',
                'grocery_division_id' => 1,
                'food_group_id' => 2,
                'created_at' => '2020-12-19 20:49:55',
                'updated_at' => '2020-12-19 20:49:55',
            ),
            35 => 
            array (
                'id' => 42,
                'incredient_de' => 'Chili/s, rot',
                'grocery_division_id' => 1,
                'food_group_id' => 2,
                'created_at' => '2020-12-19 20:50:11',
                'updated_at' => '2020-12-19 20:58:12',
            ),
            36 => 
            array (
                'id' => 43,
                'incredient_de' => 'Basilikum',
                'grocery_division_id' => 1,
                'food_group_id' => 31,
                'created_at' => '2020-12-19 20:50:25',
                'updated_at' => '2020-12-20 16:30:38',
            ),
            37 => 
            array (
                'id' => 44,
                'incredient_de' => 'Spätzle',
                'grocery_division_id' => 2,
                'food_group_id' => 4,
                'created_at' => '2020-12-19 20:50:45',
                'updated_at' => '2020-12-19 20:50:45',
            ),
            38 => 
            array (
                'id' => 45,
                'incredient_de' => 'Penne',
                'grocery_division_id' => 5,
                'food_group_id' => 4,
                'created_at' => '2020-12-19 20:51:11',
                'updated_at' => '2020-12-20 16:38:32',
            ),
            39 => 
            array (
                'id' => 46,
                'incredient_de' => 'Gemüse-Mix, Farmer-',
                'grocery_division_id' => 7,
                'food_group_id' => 2,
                'created_at' => '2020-12-19 20:51:39',
                'updated_at' => '2020-12-19 20:51:39',
            ),
            40 => 
            array (
                'id' => 47,
                'incredient_de' => 'Thunfisch',
                'grocery_division_id' => 4,
                'food_group_id' => 3,
                'created_at' => '2020-12-19 20:51:59',
                'updated_at' => '2020-12-19 20:51:59',
            ),
            41 => 
            array (
                'id' => 48,
                'incredient_de' => 'Kräuter, italienisch, TK',
                'grocery_division_id' => 7,
                'food_group_id' => 31,
                'created_at' => '2020-12-19 20:52:29',
                'updated_at' => '2020-12-20 16:34:17',
            ),
            42 => 
            array (
                'id' => 49,
                'incredient_de' => 'Kalbsschnitzel',
                'grocery_division_id' => 2,
                'food_group_id' => 1,
                'created_at' => '2020-12-19 20:52:50',
                'updated_at' => '2020-12-19 20:52:50',
            ),
            43 => 
            array (
                'id' => 50,
                'incredient_de' => 'Schinken, geräuchert',
                'grocery_division_id' => 2,
                'food_group_id' => 6,
                'created_at' => '2020-12-19 20:54:52',
                'updated_at' => '2020-12-20 16:42:22',
            ),
            44 => 
            array (
                'id' => 51,
                'incredient_de' => 'Salbei',
                'grocery_division_id' => 1,
                'food_group_id' => 31,
                'created_at' => '2020-12-19 20:55:08',
                'updated_at' => '2020-12-20 16:43:38',
            ),
            45 => 
            array (
                'id' => 52,
                'incredient_de' => 'Makkaroni',
                'grocery_division_id' => 5,
                'food_group_id' => 4,
                'created_at' => '2020-12-19 20:55:26',
                'updated_at' => '2020-12-20 16:35:12',
            ),
            46 => 
            array (
                'id' => 53,
                'incredient_de' => 'Lammlachs/e',
                'grocery_division_id' => 2,
                'food_group_id' => 1,
                'created_at' => '2020-12-19 20:56:01',
                'updated_at' => '2020-12-19 20:56:01',
            ),
            47 => 
            array (
                'id' => 54,
                'incredient_de' => 'Reis',
                'grocery_division_id' => 5,
                'food_group_id' => 9,
                'created_at' => '2020-12-19 20:56:24',
                'updated_at' => '2020-12-20 16:40:29',
            ),
            48 => 
            array (
                'id' => 55,
                'incredient_de' => 'Paprikaschote/n, rot',
                'grocery_division_id' => 1,
                'food_group_id' => 2,
                'created_at' => '2020-12-19 20:56:45',
                'updated_at' => '2020-12-19 20:57:34',
            ),
            49 => 
            array (
                'id' => 56,
                'incredient_de' => 'Paprikaschote/n, gelb',
                'grocery_division_id' => 1,
                'food_group_id' => 2,
                'created_at' => '2020-12-19 20:57:06',
                'updated_at' => '2020-12-19 20:57:06',
            ),
            50 => 
            array (
                'id' => 57,
                'incredient_de' => 'Paprikaschote/n, grün',
                'grocery_division_id' => 1,
                'food_group_id' => 2,
                'created_at' => '2020-12-19 20:57:23',
                'updated_at' => '2020-12-19 20:57:23',
            ),
            51 => 
            array (
                'id' => 58,
                'incredient_de' => 'Reis, Basmati-',
                'grocery_division_id' => 5,
                'food_group_id' => 9,
                'created_at' => '2020-12-19 20:57:59',
                'updated_at' => '2020-12-20 16:40:47',
            ),
            52 => 
            array (
                'id' => 59,
                'incredient_de' => 'Chili/s, grün',
                'grocery_division_id' => 1,
                'food_group_id' => 2,
                'created_at' => '2020-12-19 20:58:43',
                'updated_at' => '2020-12-19 20:58:43',
            ),
            53 => 
            array (
                'id' => 60,
                'incredient_de' => 'Zitrone/n',
                'grocery_division_id' => 1,
                'food_group_id' => 10,
                'created_at' => '2020-12-19 20:58:56',
                'updated_at' => '2020-12-19 20:58:56',
            ),
            54 => 
            array (
                'id' => 61,
                'incredient_de' => 'Cashewkerne',
                'grocery_division_id' => 5,
                'food_group_id' => 33,
                'created_at' => '2020-12-19 20:59:18',
                'updated_at' => '2020-12-20 16:31:27',
            ),
            55 => 
            array (
                'id' => 62,
                'incredient_de' => 'Garnele/n',
                'grocery_division_id' => 7,
                'food_group_id' => 3,
                'created_at' => '2020-12-19 20:59:47',
                'updated_at' => '2020-12-19 20:59:47',
            ),
            56 => 
            array (
                'id' => 63,
                'incredient_de' => 'Bulgur',
                'grocery_division_id' => 5,
                'food_group_id' => 9,
                'created_at' => '2020-12-19 21:00:10',
                'updated_at' => '2020-12-20 16:30:59',
            ),
            57 => 
            array (
                'id' => 64,
                'incredient_de' => 'Hähnchenbrustfilet',
                'grocery_division_id' => 2,
                'food_group_id' => 1,
                'created_at' => '2020-12-19 21:00:27',
                'updated_at' => '2020-12-19 21:29:01',
            ),
            58 => 
            array (
                'id' => 65,
                'incredient_de' => 'Meeresfrüchte, gemischt, TK',
                'grocery_division_id' => 7,
                'food_group_id' => 3,
                'created_at' => '2020-12-19 21:00:51',
                'updated_at' => '2020-12-19 21:00:51',
            ),
            59 => 
            array (
                'id' => 66,
                'incredient_de' => 'Aubergine/n',
                'grocery_division_id' => 1,
                'food_group_id' => 2,
                'created_at' => '2020-12-19 21:01:10',
                'updated_at' => '2020-12-19 21:01:10',
            ),
            60 => 
            array (
                'id' => 68,
                'incredient_de' => 'Schafskäse',
                'grocery_division_id' => 2,
                'food_group_id' => 7,
                'created_at' => '2020-12-19 21:02:25',
                'updated_at' => '2020-12-19 21:02:25',
            ),
            61 => 
            array (
                'id' => 69,
                'incredient_de' => 'Pizzateig',
                'grocery_division_id' => 2,
                'food_group_id' => 35,
                'created_at' => '2020-12-19 21:02:51',
                'updated_at' => '2020-12-20 16:39:43',
            ),
            62 => 
            array (
                'id' => 70,
                'incredient_de' => 'Taleggio',
                'grocery_division_id' => 2,
                'food_group_id' => 7,
                'created_at' => '2020-12-19 21:03:09',
                'updated_at' => '2020-12-19 21:03:09',
            ),
            63 => 
            array (
                'id' => 71,
                'incredient_de' => 'Bergkäse',
                'grocery_division_id' => 2,
                'food_group_id' => 7,
                'created_at' => '2020-12-19 21:03:54',
                'updated_at' => '2020-12-19 21:04:48',
            ),
            64 => 
            array (
                'id' => 72,
                'incredient_de' => 'Knödelteig aus Kartoffeln',
                'grocery_division_id' => 2,
                'food_group_id' => 35,
                'created_at' => '2020-12-19 21:06:50',
                'updated_at' => '2020-12-20 16:33:36',
            ),
            65 => 
            array (
                'id' => 73,
                'incredient_de' => 'Mandeln, Stifte-',
                'grocery_division_id' => 3,
                'food_group_id' => 33,
                'created_at' => '2020-12-19 21:07:08',
                'updated_at' => '2020-12-20 16:35:39',
            ),
            66 => 
            array (
                'id' => 74,
                'incredient_de' => 'Pastinake/n',
                'grocery_division_id' => 1,
                'food_group_id' => 2,
                'created_at' => '2020-12-19 21:07:30',
                'updated_at' => '2020-12-19 21:07:30',
            ),
            67 => 
            array (
                'id' => 75,
                'incredient_de' => 'Kartoffel/n',
                'grocery_division_id' => 1,
                'food_group_id' => 2,
                'created_at' => '2020-12-19 21:07:51',
                'updated_at' => '2020-12-19 21:07:51',
            ),
            68 => 
            array (
                'id' => 76,
                'incredient_de' => 'Milch, Kuh-',
                'grocery_division_id' => 2,
                'food_group_id' => 5,
                'created_at' => '2020-12-19 21:08:13',
                'updated_at' => '2020-12-19 21:08:13',
            ),
            69 => 
            array (
                'id' => 77,
                'incredient_de' => 'Milch, Hafer-/ Mandel-/Soja-',
                'grocery_division_id' => 2,
                'food_group_id' => 5,
                'created_at' => '2020-12-19 21:08:41',
                'updated_at' => '2020-12-19 21:08:41',
            ),
            70 => 
            array (
                'id' => 78,
                'incredient_de' => 'Kichererbsen',
                'grocery_division_id' => 4,
                'food_group_id' => 8,
                'created_at' => '2020-12-19 21:09:04',
                'updated_at' => '2020-12-19 21:09:04',
            ),
            71 => 
            array (
                'id' => 79,
                'incredient_de' => 'Zucchini/s',
                'grocery_division_id' => 1,
                'food_group_id' => 2,
                'created_at' => '2020-12-19 21:09:33',
                'updated_at' => '2020-12-19 21:09:33',
            ),
            72 => 
            array (
                'id' => 80,
                'incredient_de' => 'Quark',
                'grocery_division_id' => 2,
                'food_group_id' => 5,
                'created_at' => '2020-12-19 21:09:49',
                'updated_at' => '2020-12-19 21:09:49',
            ),
            73 => 
            array (
                'id' => 81,
                'incredient_de' => 'Gnocchi',
                'grocery_division_id' => 2,
                'food_group_id' => 4,
                'created_at' => '2020-12-19 21:10:07',
                'updated_at' => '2020-12-19 21:10:07',
            ),
            74 => 
            array (
                'id' => 82,
                'incredient_de' => 'Mascarpone',
                'grocery_division_id' => 2,
                'food_group_id' => 5,
                'created_at' => '2020-12-19 21:10:26',
                'updated_at' => '2020-12-19 21:10:26',
            ),
            75 => 
            array (
                'id' => 83,
                'incredient_de' => 'Ei/er',
                'grocery_division_id' => 1,
                'food_group_id' => 5,
                'created_at' => '2020-12-19 21:11:13',
                'updated_at' => '2020-12-19 21:11:13',
            ),
            76 => 
            array (
                'id' => 84,
                'incredient_de' => 'Mangoldstaude',
                'grocery_division_id' => 1,
                'food_group_id' => 2,
                'created_at' => '2020-12-19 21:11:52',
                'updated_at' => '2020-12-19 21:11:52',
            ),
            77 => 
            array (
                'id' => 85,
                'incredient_de' => 'Schupfnudeln',
                'grocery_division_id' => 2,
                'food_group_id' => 35,
                'created_at' => '2020-12-19 21:12:09',
                'updated_at' => '2020-12-20 16:42:57',
            ),
            78 => 
            array (
                'id' => 86,
                'incredient_de' => 'Orangenmarmelade',
                'grocery_division_id' => 5,
                'food_group_id' => 35,
                'created_at' => '2020-12-19 21:12:36',
                'updated_at' => '2020-12-20 16:37:53',
            ),
            79 => 
            array (
                'id' => 87,
                'incredient_de' => 'Champignon/s',
                'grocery_division_id' => 1,
                'food_group_id' => 2,
                'created_at' => '2020-12-19 21:12:52',
                'updated_at' => '2020-12-19 21:12:52',
            ),
            80 => 
            array (
                'id' => 88,
                'incredient_de' => 'Mais',
                'grocery_division_id' => 4,
                'food_group_id' => 8,
                'created_at' => '2020-12-19 21:13:07',
                'updated_at' => '2020-12-19 21:13:07',
            ),
            81 => 
            array (
                'id' => 89,
                'incredient_de' => 'Mehl',
                'grocery_division_id' => 5,
                'food_group_id' => 9,
                'created_at' => '2020-12-19 21:13:18',
                'updated_at' => '2020-12-20 16:36:26',
            ),
            82 => 
            array (
                'id' => 90,
                'incredient_de' => 'Tofu, Seiden-',
                'grocery_division_id' => 2,
                'food_group_id' => 5,
                'created_at' => '2020-12-19 21:13:36',
                'updated_at' => '2020-12-19 21:13:36',
            ),
            83 => 
            array (
                'id' => 91,
                'incredient_de' => 'Tofu, Räucher-',
                'grocery_division_id' => 2,
                'food_group_id' => 5,
                'created_at' => '2020-12-19 21:13:52',
                'updated_at' => '2020-12-19 21:13:52',
            ),
            84 => 
            array (
                'id' => 92,
                'incredient_de' => 'Merrettich',
                'grocery_division_id' => 4,
                'food_group_id' => 8,
                'created_at' => '2020-12-19 21:14:09',
                'updated_at' => '2020-12-19 21:14:09',
            ),
            85 => 
            array (
                'id' => 93,
                'incredient_de' => 'Senf',
                'grocery_division_id' => 4,
                'food_group_id' => 8,
                'created_at' => '2020-12-19 21:14:22',
                'updated_at' => '2020-12-19 21:14:22',
            ),
            86 => 
            array (
                'id' => 94,
                'incredient_de' => 'Radieschen',
                'grocery_division_id' => 1,
                'food_group_id' => 2,
                'created_at' => '2020-12-19 21:14:43',
                'updated_at' => '2020-12-19 21:14:43',
            ),
            87 => 
            array (
                'id' => 95,
                'incredient_de' => 'Joghurt, Natur-',
                'grocery_division_id' => 2,
                'food_group_id' => 5,
                'created_at' => '2020-12-19 21:15:00',
                'updated_at' => '2020-12-19 21:15:00',
            ),
            88 => 
            array (
                'id' => 96,
                'incredient_de' => 'Rotbarschfilet/s',
                'grocery_division_id' => 7,
                'food_group_id' => 3,
                'created_at' => '2020-12-19 21:15:44',
                'updated_at' => '2020-12-19 21:15:44',
            ),
            89 => 
            array (
                'id' => 97,
                'incredient_de' => 'Kabeljaufilet/s',
                'grocery_division_id' => 7,
                'food_group_id' => 3,
                'created_at' => '2020-12-19 21:16:05',
                'updated_at' => '2020-12-19 21:16:05',
            ),
            90 => 
            array (
                'id' => 98,
                'incredient_de' => 'Seelachsfilet/s',
                'grocery_division_id' => 7,
                'food_group_id' => 3,
                'created_at' => '2020-12-19 21:16:20',
                'updated_at' => '2020-12-19 21:16:20',
            ),
            91 => 
            array (
                'id' => 99,
                'incredient_de' => 'Bohne/n, grün',
                'grocery_division_id' => 1,
                'food_group_id' => 2,
                'created_at' => '2020-12-19 21:16:47',
                'updated_at' => '2020-12-19 21:16:47',
            ),
            92 => 
            array (
                'id' => 100,
                'incredient_de' => 'Thunfischsteaks',
                'grocery_division_id' => 2,
                'food_group_id' => 3,
                'created_at' => '2020-12-19 21:17:50',
                'updated_at' => '2020-12-19 21:17:50',
            ),
            93 => 
            array (
                'id' => 101,
                'incredient_de' => 'Polenta',
                'grocery_division_id' => 5,
                'food_group_id' => 9,
                'created_at' => '2020-12-19 21:18:13',
                'updated_at' => '2020-12-20 16:40:11',
            ),
            94 => 
            array (
                'id' => 102,
                'incredient_de' => 'Lachsfilet/s',
                'grocery_division_id' => 2,
                'food_group_id' => 3,
                'created_at' => '2020-12-19 21:18:33',
                'updated_at' => '2020-12-19 21:18:33',
            ),
            95 => 
            array (
                'id' => 103,
                'incredient_de' => 'Semmelknödelteig',
                'grocery_division_id' => 2,
                'food_group_id' => 35,
                'created_at' => '2020-12-19 21:18:56',
                'updated_at' => '2020-12-20 16:43:16',
            ),
            96 => 
            array (
                'id' => 104,
                'incredient_de' => 'Frischkäse',
                'grocery_division_id' => 2,
                'food_group_id' => 5,
                'created_at' => '2020-12-19 21:19:13',
                'updated_at' => '2020-12-19 21:19:13',
            ),
            97 => 
            array (
                'id' => 105,
                'incredient_de' => 'Couscous',
                'grocery_division_id' => 5,
                'food_group_id' => 9,
                'created_at' => '2020-12-19 21:20:31',
                'updated_at' => '2020-12-20 16:31:44',
            ),
            98 => 
            array (
                'id' => 106,
                'incredient_de' => 'Rinderfiletsteak/s',
                'grocery_division_id' => 2,
                'food_group_id' => 1,
                'created_at' => '2020-12-19 21:21:27',
                'updated_at' => '2020-12-19 21:21:27',
            ),
            99 => 
            array (
                'id' => 107,
                'incredient_de' => 'Rucola',
                'grocery_division_id' => 1,
                'food_group_id' => 2,
                'created_at' => '2020-12-19 21:21:42',
                'updated_at' => '2020-12-19 21:21:42',
            ),
            100 => 
            array (
                'id' => 108,
                'incredient_de' => 'Rinderhüftsteak/s',
                'grocery_division_id' => 2,
                'food_group_id' => 1,
                'created_at' => '2020-12-19 21:22:25',
                'updated_at' => '2020-12-19 21:22:25',
            ),
            101 => 
            array (
                'id' => 109,
                'incredient_de' => 'Ingwer',
                'grocery_division_id' => 1,
                'food_group_id' => 2,
                'created_at' => '2020-12-19 21:22:42',
                'updated_at' => '2020-12-20 16:33:08',
            ),
            102 => 
            array (
                'id' => 110,
                'incredient_de' => 'Ananas',
                'grocery_division_id' => 1,
                'food_group_id' => 10,
                'created_at' => '2020-12-19 21:22:56',
                'updated_at' => '2020-12-19 21:22:56',
            ),
            103 => 
            array (
                'id' => 111,
                'incredient_de' => 'Mango/s',
                'grocery_division_id' => 1,
                'food_group_id' => 10,
                'created_at' => '2020-12-19 21:23:12',
                'updated_at' => '2020-12-19 21:23:12',
            ),
            104 => 
            array (
                'id' => 112,
                'incredient_de' => 'Süßkartoffel/n',
                'grocery_division_id' => 1,
                'food_group_id' => 2,
                'created_at' => '2020-12-19 21:23:38',
                'updated_at' => '2020-12-19 21:23:38',
            ),
            105 => 
            array (
                'id' => 113,
                'incredient_de' => 'Sardellenfilet/s',
                'grocery_division_id' => 4,
                'food_group_id' => 8,
                'created_at' => '2020-12-19 21:24:15',
                'updated_at' => '2020-12-19 21:24:15',
            ),
            106 => 
            array (
                'id' => 114,
                'incredient_de' => 'Sadellenpaste',
                'grocery_division_id' => 4,
                'food_group_id' => 8,
                'created_at' => '2020-12-19 21:24:31',
                'updated_at' => '2020-12-19 21:24:31',
            ),
            107 => 
            array (
                'id' => 115,
                'incredient_de' => 'Schweinefilet/s',
                'grocery_division_id' => 2,
                'food_group_id' => 1,
                'created_at' => '2020-12-19 21:24:48',
                'updated_at' => '2020-12-19 21:24:48',
            ),
            108 => 
            array (
                'id' => 116,
                'incredient_de' => 'Weichweizen',
                'grocery_division_id' => 5,
                'food_group_id' => 9,
                'created_at' => '2020-12-19 21:25:06',
                'updated_at' => '2020-12-20 16:45:43',
            ),
            109 => 
            array (
                'id' => 117,
                'incredient_de' => 'Tomatenmark',
                'grocery_division_id' => 4,
                'food_group_id' => 8,
                'created_at' => '2020-12-19 21:25:27',
                'updated_at' => '2020-12-19 21:25:27',
            ),
            110 => 
            array (
                'id' => 118,
                'incredient_de' => 'Koriander',
                'grocery_division_id' => 1,
                'food_group_id' => 31,
                'created_at' => '2020-12-19 21:25:43',
                'updated_at' => '2020-12-20 16:34:00',
            ),
            111 => 
            array (
                'id' => 119,
                'incredient_de' => 'Pesto, grün',
                'grocery_division_id' => 4,
                'food_group_id' => 8,
                'created_at' => '2020-12-19 21:26:15',
                'updated_at' => '2020-12-19 21:26:15',
            ),
            112 => 
            array (
                'id' => 120,
                'incredient_de' => 'Pesto, rot',
                'grocery_division_id' => 4,
                'food_group_id' => 8,
                'created_at' => '2020-12-19 21:26:30',
                'updated_at' => '2020-12-19 21:26:30',
            ),
            113 => 
            array (
                'id' => 121,
                'incredient_de' => 'Parmaschinken',
                'grocery_division_id' => 2,
                'food_group_id' => 6,
                'created_at' => '2020-12-19 21:27:08',
                'updated_at' => '2020-12-20 16:38:13',
            ),
            114 => 
            array (
                'id' => 122,
                'incredient_de' => 'Fond, Kalbs-',
                'grocery_division_id' => 4,
                'food_group_id' => 8,
                'created_at' => '2020-12-19 21:27:33',
                'updated_at' => '2020-12-19 21:27:33',
            ),
            115 => 
            array (
                'id' => 123,
                'incredient_de' => 'Fond, Fisch-',
                'grocery_division_id' => 4,
                'food_group_id' => 8,
                'created_at' => '2020-12-19 21:27:48',
                'updated_at' => '2020-12-19 21:27:48',
            ),
            116 => 
            array (
                'id' => 124,
                'incredient_de' => 'Fond, Rinder-',
                'grocery_division_id' => 4,
                'food_group_id' => 8,
                'created_at' => '2020-12-19 21:28:03',
                'updated_at' => '2020-12-19 21:28:03',
            ),
            117 => 
            array (
                'id' => 125,
                'incredient_de' => 'Fond, Geflügel-',
                'grocery_division_id' => 4,
                'food_group_id' => 8,
                'created_at' => '2020-12-19 21:28:24',
                'updated_at' => '2020-12-19 21:28:24',
            ),
            118 => 
            array (
                'id' => 126,
                'incredient_de' => 'Gemüsebrühe',
                'grocery_division_id' => 4,
                'food_group_id' => 8,
                'created_at' => '2020-12-19 21:28:41',
                'updated_at' => '2020-12-19 21:28:41',
            ),
            119 => 
            array (
                'id' => 127,
                'incredient_de' => 'Hähnchenschnitzel',
                'grocery_division_id' => 2,
                'food_group_id' => 1,
                'created_at' => '2020-12-19 21:29:28',
                'updated_at' => '2020-12-19 21:29:28',
            ),
            120 => 
            array (
                'id' => 128,
                'incredient_de' => 'Hühnerbrühe',
                'grocery_division_id' => 4,
                'food_group_id' => 8,
                'created_at' => '2020-12-19 21:29:46',
                'updated_at' => '2020-12-19 21:29:46',
            ),
            121 => 
            array (
                'id' => 130,
                'incredient_de' => 'Möhre/n',
                'grocery_division_id' => 1,
                'food_group_id' => 2,
                'created_at' => '2020-12-19 21:30:48',
                'updated_at' => '2020-12-19 21:30:48',
            ),
            122 => 
            array (
                'id' => 131,
                'incredient_de' => 'Rinderhackfleisch',
                'grocery_division_id' => 2,
                'food_group_id' => 1,
                'created_at' => '2020-12-19 21:31:07',
                'updated_at' => '2020-12-19 21:31:07',
            ),
            123 => 
            array (
                'id' => 132,
                'incredient_de' => 'Kasseler Kottelett/s',
                'grocery_division_id' => 2,
                'food_group_id' => 1,
                'created_at' => '2020-12-19 21:31:37',
                'updated_at' => '2020-12-19 21:31:37',
            ),
            124 => 
            array (
                'id' => 133,
                'incredient_de' => 'Linsen, rot',
                'grocery_division_id' => 5,
                'food_group_id' => 9,
                'created_at' => '2020-12-19 21:31:50',
                'updated_at' => '2020-12-20 16:34:58',
            ),
            125 => 
            array (
                'id' => 134,
                'incredient_de' => 'Linsen, Teller-',
                'grocery_division_id' => 5,
                'food_group_id' => 9,
                'created_at' => '2020-12-19 21:32:06',
                'updated_at' => '2020-12-20 16:34:45',
            ),
            126 => 
            array (
                'id' => 135,
                'incredient_de' => 'Linsen, Beluga-',
                'grocery_division_id' => 5,
                'food_group_id' => 9,
                'created_at' => '2020-12-19 21:32:20',
                'updated_at' => '2020-12-20 16:34:33',
            ),
            127 => 
            array (
                'id' => 136,
                'incredient_de' => 'Grieß, Hartweizen-',
                'grocery_division_id' => 5,
                'food_group_id' => 9,
                'created_at' => '2020-12-19 21:33:06',
                'updated_at' => '2020-12-20 16:32:26',
            ),
            128 => 
            array (
                'id' => 137,
                'incredient_de' => 'Gries, Weichweizen-',
                'grocery_division_id' => 5,
                'food_group_id' => 9,
                'created_at' => '2020-12-19 21:33:22',
                'updated_at' => '2020-12-20 16:32:14',
            ),
            129 => 
            array (
                'id' => 138,
                'incredient_de' => 'Sahne, saure',
                'grocery_division_id' => 2,
                'food_group_id' => 5,
                'created_at' => '2020-12-20 16:41:32',
                'updated_at' => '2020-12-20 16:41:32',
            ),
            130 => 
            array (
                'id' => 139,
                'incredient_de' => 'Lauch',
                'grocery_division_id' => 1,
                'food_group_id' => 2,
                'created_at' => '2020-12-20 16:47:04',
                'updated_at' => '2020-12-20 16:47:04',
            ),
            131 => 
            array (
                'id' => 140,
                'incredient_de' => 'Kokosmilch',
                'grocery_division_id' => 4,
                'food_group_id' => 8,
                'created_at' => '2020-12-20 16:47:22',
                'updated_at' => '2020-12-20 16:47:22',
            ),
            132 => 
            array (
                'id' => 141,
                'incredient_de' => 'Limette/n',
                'grocery_division_id' => 1,
                'food_group_id' => 10,
                'created_at' => '2020-12-20 16:47:41',
                'updated_at' => '2020-12-20 16:47:41',
            ),
            133 => 
            array (
                'id' => 142,
                'incredient_de' => 'Ras-el-Hanout',
                'grocery_division_id' => 5,
                'food_group_id' => 32,
                'created_at' => '2020-12-20 16:48:34',
                'updated_at' => '2020-12-20 16:48:34',
            ),
            134 => 
            array (
                'id' => 143,
                'incredient_de' => 'Orangensaft',
                'grocery_division_id' => 5,
                'food_group_id' => 34,
                'created_at' => '2020-12-20 16:48:55',
                'updated_at' => '2020-12-20 16:48:55',
            ),
            135 => 
            array (
                'id' => 144,
                'incredient_de' => 'Apfelsaft',
                'grocery_division_id' => 5,
                'food_group_id' => 34,
                'created_at' => '2020-12-20 16:49:09',
                'updated_at' => '2020-12-20 16:49:09',
            ),
            136 => 
            array (
                'id' => 145,
                'incredient_de' => 'Paprikaschote/n, gegrillt, eingelegt',
                'grocery_division_id' => 4,
                'food_group_id' => 8,
                'created_at' => '2020-12-20 16:49:45',
                'updated_at' => '2020-12-20 16:49:45',
            ),
            137 => 
            array (
                'id' => 146,
                'incredient_de' => 'Harissa',
                'grocery_division_id' => 4,
                'food_group_id' => 32,
                'created_at' => '2020-12-20 16:49:57',
                'updated_at' => '2020-12-20 16:49:57',
            ),
            138 => 
            array (
                'id' => 147,
                'incredient_de' => 'Erdnusskerne',
                'grocery_division_id' => 5,
                'food_group_id' => 33,
                'created_at' => '2020-12-20 16:50:18',
                'updated_at' => '2020-12-20 16:50:18',
            ),
            139 => 
            array (
                'id' => 148,
                'incredient_de' => 'Erbse/n',
                'grocery_division_id' => 7,
                'food_group_id' => 2,
                'created_at' => '2020-12-20 16:50:50',
                'updated_at' => '2020-12-20 16:50:50',
            ),
            140 => 
            array (
                'id' => 149,
                'incredient_de' => 'Schmand',
                'grocery_division_id' => 2,
                'food_group_id' => 5,
                'created_at' => '2020-12-20 16:51:08',
                'updated_at' => '2020-12-20 16:51:08',
            ),
            141 => 
            array (
                'id' => 150,
                'incredient_de' => 'Wasabipaste',
                'grocery_division_id' => 5,
                'food_group_id' => 32,
                'created_at' => '2020-12-20 16:51:25',
                'updated_at' => '2020-12-20 16:51:25',
            ),
            142 => 
            array (
                'id' => 151,
                'incredient_de' => 'Krabbe/n, Nordsee',
                'grocery_division_id' => 2,
                'food_group_id' => 3,
                'created_at' => '2020-12-20 16:51:48',
                'updated_at' => '2020-12-20 16:51:48',
            ),
            143 => 
            array (
                'id' => 152,
                'incredient_de' => 'Chicoreestaude/n',
                'grocery_division_id' => 1,
                'food_group_id' => 2,
                'created_at' => '2020-12-20 16:52:23',
                'updated_at' => '2020-12-20 16:52:23',
            ),
            144 => 
            array (
                'id' => 153,
                'incredient_de' => 'Linsen, Dosen-',
                'grocery_division_id' => 4,
                'food_group_id' => 8,
                'created_at' => '2020-12-20 16:52:54',
                'updated_at' => '2020-12-20 16:53:49',
            ),
            145 => 
            array (
                'id' => 154,
                'incredient_de' => 'Wallnüsse',
                'grocery_division_id' => 3,
                'food_group_id' => 33,
                'created_at' => '2020-12-20 16:54:11',
                'updated_at' => '2020-12-20 16:54:11',
            ),
            146 => 
            array (
                'id' => 155,
                'incredient_de' => 'Ziegenfrischkäsetaler',
                'grocery_division_id' => 2,
                'food_group_id' => 5,
                'created_at' => '2020-12-20 16:54:49',
                'updated_at' => '2020-12-20 16:54:49',
            ),
            147 => 
            array (
                'id' => 156,
                'incredient_de' => 'Pfeffer',
                'grocery_division_id' => 5,
                'food_group_id' => 32,
                'created_at' => '2020-12-20 16:55:11',
                'updated_at' => '2020-12-20 16:55:11',
            ),
            148 => 
            array (
                'id' => 157,
                'incredient_de' => 'Ajvar',
                'grocery_division_id' => 6,
                'food_group_id' => 32,
                'created_at' => '2020-12-20 16:55:35',
                'updated_at' => '2020-12-20 16:55:35',
            ),
            149 => 
            array (
                'id' => 158,
                'incredient_de' => 'Bohnen, Riesen-, Dosen-',
                'grocery_division_id' => 4,
                'food_group_id' => 8,
                'created_at' => '2020-12-20 16:56:28',
                'updated_at' => '2020-12-20 16:56:28',
            ),
            150 => 
            array (
                'id' => 159,
            'incredient_de' => 'Rote Bete/n (gegart)',
                'grocery_division_id' => 1,
                'food_group_id' => 2,
                'created_at' => '2020-12-20 16:57:19',
                'updated_at' => '2020-12-20 16:57:19',
            ),
            151 => 
            array (
                'id' => 160,
                'incredient_de' => 'Rote Bete/n',
                'grocery_division_id' => 1,
                'food_group_id' => 2,
                'created_at' => '2020-12-20 16:57:34',
                'updated_at' => '2020-12-20 16:57:34',
            ),
            152 => 
            array (
                'id' => 161,
                'incredient_de' => 'Sprossen',
                'grocery_division_id' => 1,
                'food_group_id' => 31,
                'created_at' => '2020-12-20 16:58:16',
                'updated_at' => '2020-12-20 16:58:16',
            ),
            153 => 
            array (
                'id' => 162,
                'incredient_de' => 'Chinakohl',
                'grocery_division_id' => 1,
                'food_group_id' => 2,
                'created_at' => '2020-12-20 16:58:28',
                'updated_at' => '2020-12-20 16:58:28',
            ),
            154 => 
            array (
                'id' => 163,
                'incredient_de' => 'Sojasauce',
                'grocery_division_id' => 4,
                'food_group_id' => 32,
                'created_at' => '2020-12-20 16:58:48',
                'updated_at' => '2020-12-20 16:58:48',
            ),
            155 => 
            array (
                'id' => 164,
                'incredient_de' => 'Bohne/n, breit',
                'grocery_division_id' => 1,
                'food_group_id' => 2,
                'created_at' => '2020-12-20 16:59:33',
                'updated_at' => '2020-12-20 16:59:33',
            ),
            156 => 
            array (
                'id' => 165,
                'incredient_de' => 'Mandeln, Blättchen',
                'grocery_division_id' => 3,
                'food_group_id' => 33,
                'created_at' => '2020-12-20 17:00:20',
                'updated_at' => '2020-12-20 17:00:20',
            ),
            157 => 
            array (
                'id' => 166,
                'incredient_de' => 'Mandeln, gehackt',
                'grocery_division_id' => 3,
                'food_group_id' => 33,
                'created_at' => '2020-12-20 17:00:41',
                'updated_at' => '2020-12-20 17:00:41',
            ),
        ));
        
        
    }
}