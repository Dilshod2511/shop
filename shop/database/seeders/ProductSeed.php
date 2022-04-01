<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('products')->insert([
           [
               'title'=>'LG',
               'price'=>'300$',
               'category'=>'mobile',
               'description'=>' A smartphone with 4gb ram and much more feature',
               'gallery'=>'https://apollo-olx.cdnvideo.ru/v1/files/0edy4n1zo0u92-UZ/image;s=644x461'
           ],
           [
               'title'=>'Artel',
               'price'=>'500$',
               'category'=>'tv',
               'description'=>' A smart tv with  much more feature',
               'gallery'=>'https://www.artelgroup.org/upload/product_pictures/A9000smart-43-main-1080%D1%851080.jpg'
           ],
           [
               'title'=>'LG',
               'price'=>'70$',
               'category'=>'TV',
               'description'=>' A tv with much more feature',
               'gallery'=>'https://www.lg.com/in/images/tvs/md07530435/gallery/43UP7500PTZ-D-02.jpg'
           ],
           [
               'title'=>'Lg fridge',
               'price'=>'100$',
               'category'=>'fridge',
               'description'=>' A fridge with  much more feature',
               'gallery'=>'https://www.sathya.in/media/52872/catalog/lg-fridge-glb191krgx-5.png?size=600'
           ],
           [
            'title'=>'Artel',
            'price'=>'500$',
            'category'=>'tv',
            'description'=>' A smart tv with  much more feature',
            'gallery'=>'https://www.artelgroup.org/upload/product_pictures/A9000smart-43-main-1080%D1%851080.jpg'
        ],
        [
            'title'=>'LG',
            'price'=>'70$',
            'category'=>'TV',
            'description'=>' A tv with much more feature',
            'gallery'=>'https://www.lg.com/in/images/tvs/md07530435/gallery/43UP7500PTZ-D-02.jpg'
        ],
           


       ]);
    }
}
