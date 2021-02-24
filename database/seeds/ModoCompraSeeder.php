<?php

use Illuminate\Database\Seeder;
use App\Models\ModoCompra;

class ModoCompraSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */ 
    public function run()
    {
        ModoCompra::create(['id'   => 1,
                            'nome' => 'Agencia',
                            'percentual' => 20]);

        ModoCompra::create(['id'   => 2,
                            'nome' => 'Revenda',
                            'percentual' => 15]);

        ModoCompra::create(['id'   => 3,
                            'nome' => 'Cliente Final',
                            'percentual' => 0]);
    }
}
