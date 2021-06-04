<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ProductTransportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            'name' => 'Transport',
            'kind' => "Transport",
            'image' => 'img/transport_default.jpg'
        ]);
    }
}
