<?php

namespace Database\Seeders;

use App\Models\Entrada;
use Illuminate\Database\Seeder;

class EntradaSeeder extends Seeder
{
    public function run()
    {
        Entrada::factory(10)->create();
    }
}
