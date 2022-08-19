<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $role = Role::create(['name' => 'aluno']);
        $role = Role::create(['name' => 'instrutor']);
        $role = Role::create(['name' => 'admin']);
        $role = Role::create(['name' => 'super-admin']);

        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@influenciou.com.br',
            'password' => Hash::make('admin@influenciou2022', ['cost' => 12])
        ]);

        $user->assingRole('admin');
    }
}
