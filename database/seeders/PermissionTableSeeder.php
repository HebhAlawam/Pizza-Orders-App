<?php

namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
  
class PermissionTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
           'role-list',
           'role-create',
           'role-edit',
           'role-delete',
           'customer-list',
           'pizza-list',
           'pizza-create',
           'pizza-edit',
           'pizza-delete',
           'users-list',
           'users-create',
           'users-edit',
           'users-delete',
           'orders-list',
           'orders-status',
        ];
     
        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}