<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ProductSpelComputerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            'name' => 'Spelcomputers en Games',
            'kind' => "Spelcomputers en Games",
            'image' => 'img/spelcomputer_default.jpg'
        ]);
    }
}
