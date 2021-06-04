<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class KindOfProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kind_of_product_array = ['Video & Fotografie', "elektronica", "Muziek instrumenten", "DJ apparatuur", "Transport","Boeken","Cd's en Dvd's","Spelcomputers en Games","Tuin apparatuur","Bouw apparatuur"];

        foreach($kind_of_product_array as $kind_of_product){
            DB::table('kind_of_product')->insert([
                'kind' => $kind_of_product
            ]);
        }
    }
}
