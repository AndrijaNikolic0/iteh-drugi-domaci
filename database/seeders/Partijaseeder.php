<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Partija;

class Partijaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Partija::factory()->count(70)->create();
    }
}
