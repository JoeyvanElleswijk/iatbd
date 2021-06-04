<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ProductBouwApparatuurTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            'name' => 'Bouw apparatuur',
            'kind' => "Bouw apparatuur",
            'image' => 'img/bouwapparatuur_default.jpg',
            'eigenaar' => 'henk',
        ]);
    }
}
