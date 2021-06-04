<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Joey Elleswijk",
            'email' => "djowe26@gmail.com",
            'password' => bcrypt('laravel'),
            'role' => "Admin",
        ]);

        DB::table('users')->insert([
            'name' => "Jowie Elleswijk",
            'email' => "s1115267@student.hsleiden.nl",
            'password' => bcrypt('laravel'),
            'role' => "Guest",
        ]);

        DB::table('users')->insert([
            'name' => "Hacker",
            'email' => "hacker@gmail.com",
            'password' => bcrypt('laravel'),
            'role' => "Guest",
            'banned_until' => '2021-04-10 10:10:10',
        ]);
    }
}
