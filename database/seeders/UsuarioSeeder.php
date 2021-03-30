<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $admin = Usuario::create(
            [
                'nombre' => 'Usuario Prosys',
                'primer_apellido' => 'Viña',
                'segundo_apellido' => 'del Mar',
                'email' => 'usuario@prosys.cl',
                'password' => Hash::make('q1w2e3r4t5'),
            ],
        );
        $admin->assignRole('admin');
    }
}
