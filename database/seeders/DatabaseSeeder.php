<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $user = new User();
        $user->nombre='Admin';
        $user->apellido='Admin';
        $user->user='juan.ducuara';
        $user->email='admin@aoa.com';
        $user->tipo_usuario='1';
        $user->password=encrypt('juan1234');
        $user->estado='Activo';
        $user->save();

        $user = new User();
        $user->nombre='Invitado';
        $user->apellido='Usuario';
        $user->user='invitado';
        $user->email='invitado@aoa.com';
        $user->tipo_usuario='1';
        $user->password=encrypt('juan1234');
        $user->estado='Activo';
        $user->save();
    }
}
