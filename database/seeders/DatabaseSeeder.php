<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            KindOfProductTableSeeder::class,
            // ProductVideoFotografieTableSeeder::class,
            // ProductBoekenTableSeeder::class,
            // ProductBouwApparatuurTableSeeder::class,
            // ProductDjApparatuurTableSeeder::class,
            // ProductElektronicaTableSeeder::class,
            // ProductInstrumentenTableSeeder::class,
            // ProductSpelComputerTableSeeder::class,
            // ProductTransportTableSeeder::class,
            // ProductTuinApparatuurTableSeeder::class,
            // ProductCdDvdTableSeeder::class,
            RolesTableSeeder::class,
            UsersTableSeeder::class,
        ]);
    }
}
