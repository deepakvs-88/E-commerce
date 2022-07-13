<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Productseeder extends Seeder
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
            "name"=>"SONY PS5",
            "price"=>"39,990",
            "category"=>"Gaming Console",
            "description"=>"	

            PS5, Wireless Controller, 825GB SSD, Base, HDMI Cable",
            "gallery"=>"https://rukminim1.flixcart.com/image/416/416/kj7gwi80/gamingconsole/t/v/v/cfi-1008a01r-825-sony-no-original-imafytxe7twjskbx.jpeg?q=70"
            ]
            ]);    
    }
}
