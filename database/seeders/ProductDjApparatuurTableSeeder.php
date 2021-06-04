<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ProductDjApparatuurTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            'name' => 'DJ apparatuur',
            'kind' => "DJ apparatuur",
            'image' => 'img/djapparatuur_default.jpg'
        ]);
    }
}
