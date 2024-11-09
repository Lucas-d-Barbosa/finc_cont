<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TipoReceitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\TipoReceita::factory(4)->create();
        
    }
}
