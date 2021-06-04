<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ProductInstrumentenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            'name' => 'Muziek instrumenten',
            'kind' => "Muziek instrumenten",
            'image' => 'img/instrumenten_default.jpg'
        ]);
    }
}
