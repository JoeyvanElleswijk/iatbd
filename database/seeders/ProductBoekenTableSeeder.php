<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ProductBoekenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            'name' => 'Boeken',
            'kind' => "Boeken",
            'image' => 'img/boeken_default.jpg'
        ]);
    }
}
