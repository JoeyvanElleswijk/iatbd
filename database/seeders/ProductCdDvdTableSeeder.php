<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ProductCdDvdTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            'name' => "Cd's en Dvd's",
            'kind' => "Cd's en Dvd's",
            'image' => 'img/cd-dvd_default.jpg',
            'eigenaar' => 'homo',
        ]);
    }
}
