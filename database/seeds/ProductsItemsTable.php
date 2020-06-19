<?php

use Illuminate\Database\Seeder;

class ProductsItemsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products_items')->insert([

            //-----------------ksiazki/dla-dzieci-----------------

            ['id_products' => 1, 'serial' => 'KR/101/01/001'],
            ['id_products' => 1, 'serial' => 'KR/101/01/002'],
            ['id_products' => 1, 'serial' => 'KR/101/01/003'],

            ['id_products' => 2, 'serial' => 'KR/101/02/001'],
            ['id_products' => 2, 'serial' => 'KR/101/02/002'],

            ['id_products' => 3, 'serial' => 'KR/101/03/001'],
            ['id_products' => 3, 'serial' => 'KR/101/03/002'],

            ['id_products' => 4, 'serial' => 'KR/101/04/001'],
            ['id_products' => 4, 'serial' => 'KR/101/04/002'],
            ['id_products' => 4, 'serial' => 'KR/101/04/003'],

            ['id_products' => 5, 'serial' => 'KR/101/05/001'],
            ['id_products' => 5, 'serial' => 'KR/101/05/002'],
            ['id_products' => 5, 'serial' => 'KR/101/05/003'],

            ['id_products' => 6, 'serial' => 'KR/101/06/001'],
            ['id_products' => 6, 'serial' => 'KR/101/06/002'],

            ['id_products' => 7, 'serial' => 'KR/101/07/003'],
            ['id_products' => 7, 'serial' => 'KR/101/07/001'],

            ['id_products' => 8, 'serial' => 'KR/101/08/002'],
            ['id_products' => 8, 'serial' => 'KR/101/08/003'],

            ['id_products' => 9, 'serial' => 'KR/101/09/001'],
            ['id_products' => 9, 'serial' => 'KR/101/09/002'],
            ['id_products' => 9, 'serial' => 'KR/101/09/003'],

            //-----------------ksiazki/dla-mlodziezy-----------------

            ['id_products' => 10, 'serial' => 'KR/102/01/001'],
            ['id_products' => 10, 'serial' => 'KR/102/01/002'],
            ['id_products' => 10, 'serial' => 'KR/102/01/003'],

            ['id_products' => 11, 'serial' => 'KR/102/02/001'],
            ['id_products' => 11, 'serial' => 'KR/102/02/002'],

            ['id_products' => 12, 'serial' => 'KR/102/03/001'],
            ['id_products' => 12, 'serial' => 'KR/102/03/002'],

            ['id_products' => 13, 'serial' => 'KR/102/04/001'],
            ['id_products' => 13, 'serial' => 'KR/102/04/002'],
            ['id_products' => 13, 'serial' => 'KR/102/04/003'],

            ['id_products' => 14, 'serial' => 'KR/102/05/001'],
            ['id_products' => 14, 'serial' => 'KR/102/05/002'],
            ['id_products' => 14, 'serial' => 'KR/102/05/003'],

            ['id_products' => 15, 'serial' => 'KR/102/06/001'],
            ['id_products' => 15, 'serial' => 'KR/102/06/002'],

            ['id_products' => 16, 'serial' => 'KR/102/07/003'],
            ['id_products' => 16, 'serial' => 'KR/102/07/001'],

            ['id_products' => 17, 'serial' => 'KR/102/08/002'],
            ['id_products' => 17, 'serial' => 'KR/102/08/003'],

            ['id_products' => 18, 'serial' => 'KR/102/09/001'],
            ['id_products' => 18, 'serial' => 'KR/102/09/002'],
            ['id_products' => 18, 'serial' => 'KR/102/09/003'],

            //-----------------ksiazki/dla-kobiet-----------------

            ['id_products' => 19, 'serial' => 'KR/103/01/001'],
            ['id_products' => 19, 'serial' => 'KR/103/01/002'],
            ['id_products' => 19, 'serial' => 'KR/103/01/003'],

            ['id_products' => 20, 'serial' => 'KR/103/02/001'],
            ['id_products' => 20, 'serial' => 'KR/103/02/002'],

            ['id_products' => 21, 'serial' => 'KR/103/03/001'],
            ['id_products' => 21, 'serial' => 'KR/103/03/002'],

            ['id_products' => 22, 'serial' => 'KR/103/04/001'],
            ['id_products' => 22, 'serial' => 'KR/103/04/002'],
            ['id_products' => 22, 'serial' => 'KR/103/04/003'],

            ['id_products' => 23, 'serial' => 'KR/103/05/001'],
            ['id_products' => 23, 'serial' => 'KR/103/05/002'],
            ['id_products' => 23, 'serial' => 'KR/103/05/003'],

            ['id_products' => 24, 'serial' => 'KR/103/06/001'],
            ['id_products' => 24, 'serial' => 'KR/103/06/002'],

            ['id_products' => 25, 'serial' => 'KR/103/07/003'],
            ['id_products' => 25, 'serial' => 'KR/103/07/001'],

            ['id_products' => 26, 'serial' => 'KR/103/08/002'],
            ['id_products' => 26, 'serial' => 'KR/103/08/003'],

            ['id_products' => 27, 'serial' => 'KR/103/09/001'],
            ['id_products' => 27, 'serial' => 'KR/103/09/002'],
            ['id_products' => 27, 'serial' => 'KR/103/09/003'],

            //-----------------ksiazki/naukowe-----------------

            ['id_products' => 28, 'serial' => 'KR/104/01/001'],
            ['id_products' => 28, 'serial' => 'KR/104/01/002'],
            ['id_products' => 28, 'serial' => 'KR/104/01/003'],

            ['id_products' => 29, 'serial' => 'KR/104/02/001'],
            ['id_products' => 29, 'serial' => 'KR/104/02/002'],

            ['id_products' => 30, 'serial' => 'KR/104/03/001'],
            ['id_products' => 30, 'serial' => 'KR/104/03/002'],

            ['id_products' => 31, 'serial' => 'KR/104/04/001'],
            ['id_products' => 31, 'serial' => 'KR/104/04/002'],
            ['id_products' => 31, 'serial' => 'KR/104/04/003'],

            ['id_products' => 32, 'serial' => 'KR/104/05/001'],
            ['id_products' => 32, 'serial' => 'KR/104/05/002'],
            ['id_products' => 32, 'serial' => 'KR/104/05/003'],

            ['id_products' => 33, 'serial' => 'KR/104/06/001'],
            ['id_products' => 33, 'serial' => 'KR/104/06/002'],

            ['id_products' => 34, 'serial' => 'KR/104/07/003'],
            ['id_products' => 34, 'serial' => 'KR/104/07/001'],

            ['id_products' => 35, 'serial' => 'KR/104/08/002'],
            ['id_products' => 35, 'serial' => 'KR/104/08/003'],

            ['id_products' => 36, 'serial' => 'KR/104/09/001'],
            ['id_products' => 36, 'serial' => 'KR/104/09/002'],
            ['id_products' => 36, 'serial' => 'KR/104/09/003'],

            //-----------------ksiazki/kryminały-sensacja-----------------

            ['id_products' => 37, 'serial' => 'KR/105/01/001'],
            ['id_products' => 37, 'serial' => 'KR/105/01/002'],
            ['id_products' => 37, 'serial' => 'KR/105/01/003'],

            ['id_products' => 38, 'serial' => 'KR/105/02/001'],
            ['id_products' => 38, 'serial' => 'KR/105/02/002'],

            ['id_products' => 39, 'serial' => 'KR/105/03/001'],
            ['id_products' => 39, 'serial' => 'KR/105/03/002'],

            ['id_products' => 40, 'serial' => 'KR/105/04/001'],
            ['id_products' => 40, 'serial' => 'KR/105/04/002'],
            ['id_products' => 40, 'serial' => 'KR/105/04/003'],

            ['id_products' => 41, 'serial' => 'KR/105/05/001'],
            ['id_products' => 41, 'serial' => 'KR/105/05/002'],
            ['id_products' => 41, 'serial' => 'KR/105/05/003'],

            ['id_products' => 42, 'serial' => 'KR/105/06/001'],
            ['id_products' => 42, 'serial' => 'KR/105/06/002'],

            ['id_products' => 43, 'serial' => 'KR/105/07/003'],
            ['id_products' => 43, 'serial' => 'KR/105/07/001'],

            ['id_products' => 44, 'serial' => 'KR/105/08/002'],
            ['id_products' => 44, 'serial' => 'KR/105/08/003'],

            ['id_products' => 45, 'serial' => 'KR/105/09/001'],
            ['id_products' => 45, 'serial' => 'KR/105/09/002'],
            ['id_products' => 45, 'serial' => 'KR/105/09/003'],

            //-----------------ksiazki/fantastyka-----------------

            ['id_products' => 46, 'serial' => 'KR/106/01/001'],
            ['id_products' => 46, 'serial' => 'KR/106/01/002'],
            ['id_products' => 46, 'serial' => 'KR/106/01/003'],

            ['id_products' => 47, 'serial' => 'KR/106/02/001'],
            ['id_products' => 47, 'serial' => 'KR/106/02/002'],

            ['id_products' => 48, 'serial' => 'KR/106/03/001'],
            ['id_products' => 48, 'serial' => 'KR/106/03/002'],

            ['id_products' => 49, 'serial' => 'KR/106/04/001'],
            ['id_products' => 49, 'serial' => 'KR/106/04/002'],
            ['id_products' => 49, 'serial' => 'KR/106/04/003'],

            ['id_products' => 50, 'serial' => 'KR/106/05/001'],
            ['id_products' => 50, 'serial' => 'KR/106/05/002'],
            ['id_products' => 50, 'serial' => 'KR/106/05/003'],

            ['id_products' => 51, 'serial' => 'KR/106/06/001'],
            ['id_products' => 51, 'serial' => 'KR/106/06/002'],

            ['id_products' => 52, 'serial' => 'KR/106/07/003'],
            ['id_products' => 52, 'serial' => 'KR/106/07/001'],

            ['id_products' => 53, 'serial' => 'KR/106/08/002'],
            ['id_products' => 53, 'serial' => 'KR/106/08/003'],

            ['id_products' => 54, 'serial' => 'KR/106/09/001'],
            ['id_products' => 54, 'serial' => 'KR/106/09/002'],
            ['id_products' => 54, 'serial' => 'KR/106/09/003'],

            //-----------------komiksy/amerykanskie-----------------

            ['id_products' => 55, 'serial' => 'KR/201/01/001'],
            ['id_products' => 55, 'serial' => 'KR/201/01/002'],
            ['id_products' => 55, 'serial' => 'KR/201/01/003'],

            ['id_products' => 56, 'serial' => 'KR/201/02/001'],
            ['id_products' => 56, 'serial' => 'KR/201/02/002'],

            ['id_products' => 57, 'serial' => 'KR/201/03/001'],
            ['id_products' => 57, 'serial' => 'KR/201/03/002'],

            ['id_products' => 58, 'serial' => 'KR/201/04/001'],
            ['id_products' => 58, 'serial' => 'KR/201/04/002'],
            ['id_products' => 58, 'serial' => 'KR/201/04/003'],

            ['id_products' => 59, 'serial' => 'KR/201/05/001'],
            ['id_products' => 59, 'serial' => 'KR/201/05/002'],
            ['id_products' => 59, 'serial' => 'KR/201/05/003'],

            ['id_products' => 60, 'serial' => 'KR/201/06/001'],
            ['id_products' => 60, 'serial' => 'KR/201/06/002'],

            ['id_products' => 61, 'serial' => 'KR/201/07/003'],
            ['id_products' => 61, 'serial' => 'KR/201/07/001'],

            ['id_products' => 62, 'serial' => 'KR/201/08/002'],
            ['id_products' => 62, 'serial' => 'KR/201/08/003'],

            ['id_products' => 63, 'serial' => 'KR/201/09/001'],
            ['id_products' => 63, 'serial' => 'KR/201/09/002'],
            ['id_products' => 63, 'serial' => 'KR/201/09/003'],

            //-----------------komiksy/europejskie-----------------

            ['id_products' => 64, 'serial' => 'KR/202/01/001'],
            ['id_products' => 64, 'serial' => 'KR/202/01/002'],
            ['id_products' => 64, 'serial' => 'KR/202/01/003'],

            ['id_products' => 65, 'serial' => 'KR/202/02/001'],
            ['id_products' => 65, 'serial' => 'KR/202/02/002'],

            ['id_products' => 66, 'serial' => 'KR/202/03/001'],
            ['id_products' => 66, 'serial' => 'KR/202/03/002'],

            ['id_products' => 67, 'serial' => 'KR/202/04/001'],
            ['id_products' => 67, 'serial' => 'KR/202/04/002'],
            ['id_products' => 67, 'serial' => 'KR/202/04/003'],

            ['id_products' => 68, 'serial' => 'KR/202/05/001'],
            ['id_products' => 68, 'serial' => 'KR/202/05/002'],
            ['id_products' => 68, 'serial' => 'KR/202/05/003'],

            ['id_products' => 69, 'serial' => 'KR/202/06/001'],
            ['id_products' => 69, 'serial' => 'KR/202/06/002'],

            ['id_products' => 70, 'serial' => 'KR/202/07/003'],
            ['id_products' => 70, 'serial' => 'KR/202/07/001'],

            ['id_products' => 71, 'serial' => 'KR/202/08/002'],
            ['id_products' => 71, 'serial' => 'KR/202/08/003'],

            ['id_products' => 72, 'serial' => 'KR/202/09/001'],
            ['id_products' => 72, 'serial' => 'KR/202/09/002'],
            ['id_products' => 72, 'serial' => 'KR/202/09/003'],

            //-----------------komiksy/polskie-----------------

            ['id_products' => 73, 'serial' => 'KR/203/01/001'],
            ['id_products' => 73, 'serial' => 'KR/203/01/002'],
            ['id_products' => 73, 'serial' => 'KR/203/01/003'],

            ['id_products' => 74, 'serial' => 'KR/203/02/001'],
            ['id_products' => 74, 'serial' => 'KR/203/02/002'],

            ['id_products' => 75, 'serial' => 'KR/203/03/001'],
            ['id_products' => 75, 'serial' => 'KR/203/03/002'],

            ['id_products' => 76, 'serial' => 'KR/203/04/001'],
            ['id_products' => 76, 'serial' => 'KR/203/04/002'],
            ['id_products' => 76, 'serial' => 'KR/203/04/003'],

            ['id_products' => 77, 'serial' => 'KR/203/05/001'],
            ['id_products' => 77, 'serial' => 'KR/203/05/002'],
            ['id_products' => 77, 'serial' => 'KR/203/05/003'],

            ['id_products' => 78, 'serial' => 'KR/203/06/001'],
            ['id_products' => 78, 'serial' => 'KR/203/06/002'],

            ['id_products' => 79, 'serial' => 'KR/203/07/003'],
            ['id_products' => 79, 'serial' => 'KR/203/07/001'],

            ['id_products' => 80, 'serial' => 'KR/203/08/002'],
            ['id_products' => 80, 'serial' => 'KR/203/08/003'],

            ['id_products' => 81, 'serial' => 'KR/203/09/001'],
            ['id_products' => 81, 'serial' => 'KR/203/09/002'],
            ['id_products' => 81, 'serial' => 'KR/203/09/003'],

            //-----------------komiksy/dla-dzieci-----------------

            ['id_products' => 82, 'serial' => 'KR/204/01/001'],
            ['id_products' => 82, 'serial' => 'KR/204/01/002'],
            ['id_products' => 82, 'serial' => 'KR/204/01/003'],

            ['id_products' => 83, 'serial' => 'KR/204/02/001'],
            ['id_products' => 83, 'serial' => 'KR/204/02/002'],

            ['id_products' => 84, 'serial' => 'KR/204/03/001'],
            ['id_products' => 84, 'serial' => 'KR/204/03/002'],

            ['id_products' => 85, 'serial' => 'KR/204/04/001'],
            ['id_products' => 85, 'serial' => 'KR/204/04/002'],
            ['id_products' => 85, 'serial' => 'KR/204/04/003'],

            ['id_products' => 86, 'serial' => 'KR/204/05/001'],
            ['id_products' => 86, 'serial' => 'KR/204/05/002'],
            ['id_products' => 86, 'serial' => 'KR/204/05/003'],

            ['id_products' => 87, 'serial' => 'KR/204/06/001'],
            ['id_products' => 87, 'serial' => 'KR/204/06/002'],

            ['id_products' => 88, 'serial' => 'KR/204/07/003'],
            ['id_products' => 88, 'serial' => 'KR/204/07/001'],

            ['id_products' => 89, 'serial' => 'KR/204/08/002'],
            ['id_products' => 89, 'serial' => 'KR/204/08/003'],

            ['id_products' => 90, 'serial' => 'KR/204/09/001'],
            ['id_products' => 90, 'serial' => 'KR/204/09/002'],
            ['id_products' => 90, 'serial' => 'KR/204/09/003'],

            //-----------------komiksy/manga-anime-----------------

            ['id_products' => 91, 'serial' => 'KR/205/01/001'],
            ['id_products' => 91, 'serial' => 'KR/205/01/002'],
            ['id_products' => 91, 'serial' => 'KR/205/01/003'],

            ['id_products' => 92, 'serial' => 'KR/205/02/001'],
            ['id_products' => 92, 'serial' => 'KR/205/02/002'],

            ['id_products' => 93, 'serial' => 'KR/205/03/001'],
            ['id_products' => 93, 'serial' => 'KR/205/03/002'],

            ['id_products' => 94, 'serial' => 'KR/205/04/001'],
            ['id_products' => 94, 'serial' => 'KR/205/04/002'],
            ['id_products' => 94, 'serial' => 'KR/205/04/003'],

            ['id_products' => 95, 'serial' => 'KR/205/05/001'],
            ['id_products' => 95, 'serial' => 'KR/205/05/002'],
            ['id_products' => 95, 'serial' => 'KR/205/05/003'],

            ['id_products' => 96, 'serial' => 'KR/205/06/001'],
            ['id_products' => 96, 'serial' => 'KR/205/06/002'],

            ['id_products' => 97, 'serial' => 'KR/205/07/003'],
            ['id_products' => 97, 'serial' => 'KR/205/07/001'],

            ['id_products' => 98, 'serial' => 'KR/205/08/002'],
            ['id_products' => 98, 'serial' => 'KR/205/08/003'],

            ['id_products' => 99, 'serial' => 'KR/205/09/001'],
            ['id_products' => 99, 'serial' => 'KR/205/09/002'],
            ['id_products' => 99, 'serial' => 'KR/205/09/003'],

            //-----------------audiobooki/nauka-jezykow-----------------

            ['id_products' => 100, 'serial' => 'KR/301/01/001'],
            ['id_products' => 100, 'serial' => 'KR/301/01/002'],
            ['id_products' => 100, 'serial' => 'KR/301/01/003'],

            ['id_products' => 101, 'serial' => 'KR/301/02/001'],
            ['id_products' => 101, 'serial' => 'KR/301/02/002'],

            ['id_products' => 102, 'serial' => 'KR/301/03/001'],
            ['id_products' => 102, 'serial' => 'KR/301/03/002'],

            ['id_products' => 103, 'serial' => 'KR/301/04/001'],
            ['id_products' => 103, 'serial' => 'KR/301/04/002'],
            ['id_products' => 103, 'serial' => 'KR/301/04/003'],

            ['id_products' => 104, 'serial' => 'KR/301/05/001'],
            ['id_products' => 104, 'serial' => 'KR/301/05/002'],
            ['id_products' => 104, 'serial' => 'KR/301/05/003'],

            ['id_products' => 105, 'serial' => 'KR/301/06/001'],
            ['id_products' => 105, 'serial' => 'KR/301/06/002'],

            ['id_products' => 106, 'serial' => 'KR/301/07/003'],
            ['id_products' => 106, 'serial' => 'KR/301/07/001'],

            ['id_products' => 107, 'serial' => 'KR/301/08/002'],
            ['id_products' => 107, 'serial' => 'KR/301/08/003'],

            ['id_products' => 108, 'serial' => 'KR/301/09/001'],
            ['id_products' => 108, 'serial' => 'KR/301/09/002'],
            ['id_products' => 108, 'serial' => 'KR/301/09/003'],

            //-----------------audiobooki/lektury-opracowania-----------------

            ['id_products' => 109, 'serial' => 'KR/302/01/001'],
            ['id_products' => 109, 'serial' => 'KR/302/01/002'],
            ['id_products' => 109, 'serial' => 'KR/302/01/003'],

            ['id_products' => 110, 'serial' => 'KR/302/02/001'],
            ['id_products' => 110, 'serial' => 'KR/302/02/002'],

            ['id_products' => 111, 'serial' => 'KR/302/03/001'],
            ['id_products' => 111, 'serial' => 'KR/302/03/002'],

            ['id_products' => 112, 'serial' => 'KR/302/04/001'],
            ['id_products' => 112, 'serial' => 'KR/302/04/002'],
            ['id_products' => 112, 'serial' => 'KR/302/04/003'],

            ['id_products' => 113, 'serial' => 'KR/302/05/001'],
            ['id_products' => 113, 'serial' => 'KR/302/05/002'],
            ['id_products' => 113, 'serial' => 'KR/302/05/003'],

            ['id_products' => 114, 'serial' => 'KR/302/06/001'],
            ['id_products' => 114, 'serial' => 'KR/302/06/002'],

            ['id_products' => 115, 'serial' => 'KR/302/07/003'],
            ['id_products' => 115, 'serial' => 'KR/302/07/001'],

            ['id_products' => 116, 'serial' => 'KR/302/08/002'],
            ['id_products' => 116, 'serial' => 'KR/302/08/003'],

            ['id_products' => 117, 'serial' => 'KR/302/09/001'],
            ['id_products' => 117, 'serial' => 'KR/302/09/002'],
            ['id_products' => 117, 'serial' => 'KR/302/09/003'],

            //-----------------audiobooki/fantastyka-----------------

            ['id_products' => 118, 'serial' => 'KR/303/01/001'],
            ['id_products' => 118, 'serial' => 'KR/303/01/002'],
            ['id_products' => 118, 'serial' => 'KR/303/01/003'],

            ['id_products' => 119, 'serial' => 'KR/303/02/001'],
            ['id_products' => 119, 'serial' => 'KR/303/02/002'],

            ['id_products' => 120, 'serial' => 'KR/303/03/001'],
            ['id_products' => 120, 'serial' => 'KR/303/03/002'],

            ['id_products' => 121, 'serial' => 'KR/303/04/001'],
            ['id_products' => 121, 'serial' => 'KR/303/04/002'],
            ['id_products' => 121, 'serial' => 'KR/303/04/003'],

            ['id_products' => 122, 'serial' => 'KR/303/05/001'],
            ['id_products' => 122, 'serial' => 'KR/303/05/002'],
            ['id_products' => 122, 'serial' => 'KR/303/05/003'],

            ['id_products' => 123, 'serial' => 'KR/303/06/001'],
            ['id_products' => 123, 'serial' => 'KR/303/06/002'],

            ['id_products' => 124, 'serial' => 'KR/303/07/003'],
            ['id_products' => 124, 'serial' => 'KR/303/07/001'],

            ['id_products' => 125, 'serial' => 'KR/303/08/002'],
            ['id_products' => 125, 'serial' => 'KR/303/08/003'],

            ['id_products' => 126, 'serial' => 'KR/303/09/001'],
            ['id_products' => 126, 'serial' => 'KR/303/09/002'],
            ['id_products' => 126, 'serial' => 'KR/303/09/003'],

            //-----------------audiobooki/kryminał-sensacja-thriller-----------------

            ['id_products' => 127, 'serial' => 'KR/304/01/001'],
            ['id_products' => 127, 'serial' => 'KR/304/01/002'],
            ['id_products' => 127, 'serial' => 'KR/304/01/003'],

            ['id_products' => 128, 'serial' => 'KR/304/02/001'],
            ['id_products' => 128, 'serial' => 'KR/304/02/002'],

            ['id_products' => 129, 'serial' => 'KR/304/03/001'],
            ['id_products' => 129, 'serial' => 'KR/304/03/002'],

            ['id_products' => 130, 'serial' => 'KR/304/04/001'],
            ['id_products' => 130, 'serial' => 'KR/304/04/002'],
            ['id_products' => 130, 'serial' => 'KR/304/04/003'],

            ['id_products' => 131, 'serial' => 'KR/304/05/001'],
            ['id_products' => 131, 'serial' => 'KR/304/05/002'],
            ['id_products' => 131, 'serial' => 'KR/304/05/003'],

            ['id_products' => 132, 'serial' => 'KR/304/06/001'],
            ['id_products' => 132, 'serial' => 'KR/304/06/002'],

            ['id_products' => 133, 'serial' => 'KR/304/07/003'],
            ['id_products' => 133, 'serial' => 'KR/304/07/001'],

            ['id_products' => 134, 'serial' => 'KR/304/08/002'],
            ['id_products' => 134, 'serial' => 'KR/304/08/003'],

            ['id_products' => 135, 'serial' => 'KR/304/09/001'],
            ['id_products' => 135, 'serial' => 'KR/304/09/002'],
            ['id_products' => 135, 'serial' => 'KR/304/09/003'],

            //-----------------audiobooki/podroze-----------------

            ['id_products' => 136, 'serial' => 'KR/305/01/001'],
            ['id_products' => 136, 'serial' => 'KR/305/01/002'],
            ['id_products' => 136, 'serial' => 'KR/305/01/003'],

            ['id_products' => 137, 'serial' => 'KR/305/02/001'],
            ['id_products' => 137, 'serial' => 'KR/305/02/002'],

            ['id_products' => 138, 'serial' => 'KR/305/03/001'],
            ['id_products' => 138, 'serial' => 'KR/305/03/002'],

            ['id_products' => 139, 'serial' => 'KR/305/04/001'],
            ['id_products' => 139, 'serial' => 'KR/305/04/002'],
            ['id_products' => 139, 'serial' => 'KR/305/04/003'],

            ['id_products' => 140, 'serial' => 'KR/305/05/001'],
            ['id_products' => 140, 'serial' => 'KR/305/05/002'],
            ['id_products' => 140, 'serial' => 'KR/305/05/003'],

            ['id_products' => 141, 'serial' => 'KR/305/06/001'],
            ['id_products' => 141, 'serial' => 'KR/305/06/002'],

            ['id_products' => 142, 'serial' => 'KR/305/07/003'],
            ['id_products' => 142, 'serial' => 'KR/305/07/001'],

            ['id_products' => 143, 'serial' => 'KR/305/08/002'],
            ['id_products' => 143, 'serial' => 'KR/305/08/003'],

            ['id_products' => 144, 'serial' => 'KR/305/09/001'],
            ['id_products' => 144, 'serial' => 'KR/305/09/002'],
            ['id_products' => 144, 'serial' => 'KR/305/09/003'],

        ]);
    }
}
