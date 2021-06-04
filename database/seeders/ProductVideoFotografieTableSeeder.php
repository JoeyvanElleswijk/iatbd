<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ProductVideoFotografieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            'name' => 'Video & Fotografie',
            'kind' => "Video & Fotografie",
            'image' => 'img/fotografie_default.jpg'
        ]);
    }
}
