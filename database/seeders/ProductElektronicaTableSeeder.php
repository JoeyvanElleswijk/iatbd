<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ProductElektronicaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            'name' => 'Elektronica',
            'kind' => "Elektronica",
            'image' => 'img/elektronica_default.jpg',
            'eigenaar' => 'faggot',
        ]);
    }
}
