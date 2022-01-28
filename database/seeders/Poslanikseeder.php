<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Poslanik;

class Poslanikseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Poslanik::factory()->count(100)->create();
    }
}
