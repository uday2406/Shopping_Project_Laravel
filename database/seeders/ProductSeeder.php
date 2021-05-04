<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['name'=>'Sony Briava TV',
            "price"=>"20000",
            "description"=>"A Featured smart tv.",
            "category"=>"Electronics",
            "gallery"=>"https://rukminim1.flixcart.com/image/352/352/kd4uj680/television/g/8/8/sony-kd-55x7400h-original-imafu3nnwz2guq8u.jpeg?q=70"
        ],
            ['name'=>'Sennheiser MX 170 Earphone',
            "price"=>"20000",
            "description"=>"A branded earphone with 1 year replacement warranty.",
            "category"=>"Electronics",
            "gallery"=>"https://images-na.ssl-images-amazon.com/images/I/61yAkqOFeLL._SL1140_.jpg"
        ],
            ['name'=>'Sennheiser  CX 120BT in-Ear Wireless Headphones with 2 Years Warranty',
            "price"=>"20000",
            "description"=>"A branded earphone with 1 year replacement warranty.",
            "category"=>"Electronics",
            "gallery"=>"https://images-na.ssl-images-amazon.com/images/I/51L8-VKxxgL._SL1000_.jpg"
        ],
        // 'name'=>'Sony Vaio 2GB Ram and 256GB SSD Refurbished Laptop',
        // 'price'=>'10000',
        // 'description'=>'A laptop has 2 GB RAM and 256GB SSD, Inter Core i5 Processor',
        // 'category'=>'Electronics',
        // 'gallery'=>'https://rukminim1.flixcart.com/image/416/416/kjkbv680/computer/w/g/z/vaio-original-imafz3p66t3z3ver.jpeg?q=70',
        ]);
    } 
}