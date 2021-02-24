<?php

use Illuminate\Database\Seeder;
use App\Models\Hotel;

class HotelSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Hotel::create(['id'   => 1,
                       'nome' => 'Hotel Iracema']);

        Hotel::create(['id'   => 2,
                       'nome' => 'Hotel Meireles']);

        Hotel::create(['id'   => 3,
                       'nome' => 'Hotel BM']);

        Hotel::create(['id'   => 4,
                       'nome' => 'Hotel Praia']);
    }
}