<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\Poslanikseeder;
use Database\Seeders\Skupstinaseeder;
use Database\Seeders\Partijaseeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $poslaniksdr = new PoslanikSeeder;
        $skupstinasdr = new Skupstinaseeder;
        $partijasdr = new Partijaseeder;

        $poslaniksdr->run();
        $skupstinasdr->run();
        $partijasdr->run();
    }
}
