<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Conductor::factory(50)->create();
        \App\Models\Pasajero::factory(80)->create();
        \App\Models\Trayecto::factory(1500)->create(); 
        \App\Models\Opinion::factory(1000)->create(); 
    }
}
