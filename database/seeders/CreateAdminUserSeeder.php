<?php

namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
  
class CreateAdminUserSeeder extends Seeder
{
   
    public function run()
    {
        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'customer']);

        $role1->givePermissionTo(Permission::all());

        //$role2->givePermissionTo('');


        $admin = User::create([
            'name' => 'Admin', 
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        $customer = User::create([
            'name' => 'Customer', 
            'email' => 'customer@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        $admin->assignRole($role1);
        $customer->assignRole($role2);

        

     

    }
}
