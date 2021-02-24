<?php

use Illuminate\Database\Seeder;
use App\Models\Moeda;

class MoedaSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Moeda::create(['id'   => 1,
                       'nome' => 'Real',
                       'cambio' => 1]);
                            
        Moeda::create(['id'   => 2,
                       'nome' => 'Euro',
                       'cambio' => 5]);
    }
}
