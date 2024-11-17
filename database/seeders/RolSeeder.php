<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Crea el rol 'Participante'
         $role = Role::create(['name' => 'Participante', 'guard_name' => 'web']);

         // Encuentra los permisos 'Admin-Participante' y 'Admin-miAsistencia'
         $permissions = Permission::whereIn('name', ['admin-Participante'])->get();
 
         // Asigna los permisos al rol
         if ($permissions) {
             $role->givePermissionTo($permissions);
         }
    }
}
