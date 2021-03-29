<?php

namespace Database\Seeders;

use DavidVegaCl\LaravelChile\Console\Commands\RegionesComunasSeeder;
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
        RegionesComunasSeeder::staticHandle();
        $this->call(UsuariosSeeder::class);
    }
}
