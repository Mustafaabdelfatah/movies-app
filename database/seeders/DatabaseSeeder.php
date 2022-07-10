<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\LaratrustSeeder;
use Database\Seeders\UsersTableSeeder;

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
            LaratrustSeeder::class,
            UsersTableSeeder::class
        ]);


     }
}