<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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
        $rolAdmin = Role::create(['name' => 'admin']);
        $rolInvitado = Role::create(['name' => 'invitado']);

        Permission::create(['name' => 'ver:rol']);
        Permission::create(['name' => 'crear:rol']);
        Permission::create(['name' => 'editar:rol']);
        Permission::create(['name' => 'eliminar:rol']);

        Permission::create(['name' => 'ver:permiso']);

        Permission::create(['name' => 'ver:usuario']);
        Permission::create(['name' => 'crear:usuario']);
        Permission::create(['name' => 'editar:usuario']);
        Permission::create(['name' => 'eliminar:usuario']);
        

        $user = new User();
        $user->nombre='Admin';
        $user->apellido='Admin';
        $user->user='juan.ducuara';
        $user->email='admin@aoa.com';
        $user->assignRole($rolAdmin);
        $user->password=bcrypt('juan1234');
        $user->estado='Activo';
        $user->save();

        $user = new User();
        $user->nombre='Invitado';
        $user->apellido='Usuario';
        $user->user='invitado';
        $user->email='invitado@aoa.com';
        $user->assignRole($rolInvitado);
        $user->password=bcrypt('juan1234');
        $user->estado='Activo';
        $user->save();
    }
}
