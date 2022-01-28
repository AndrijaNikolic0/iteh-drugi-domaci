<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skupstina;

class Skupstinaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skupstina::factory()->count(40)->create();
    }
}
