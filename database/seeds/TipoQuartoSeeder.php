<?php

use Illuminate\Database\Seeder;
use App\Models\TipoQuarto;

class TipoQuartoSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        TipoQuarto::create(['id'   => 1,
                            'nome' => 'SGL']);

        TipoQuarto::create(['id'   => 2,
                            'nome' => 'DBL']);

        TipoQuarto::create(['id'   => 3,
                            'nome' => 'TLP']);

        TipoQuarto::create(['id'   => 4,
                            'nome' => 'QDPL']);
    }
}
