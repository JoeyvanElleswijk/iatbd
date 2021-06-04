<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ProductTuinApparatuurTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            'name' => 'Tuin apparatuur',
            'kind' => "Tuin apparatuur",
            'image' => 'img/tuinapparatuur_default.jpg'
        ]);
    }
}
