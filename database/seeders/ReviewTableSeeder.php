<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('review')->insert([
            'Gericht_aan' => 'Djooweeeyyy',
            'Beschrijving' => "Doodleuk",
            'Geschreven_door' => 'Joey van Elleswijk',
        ]);
}

}