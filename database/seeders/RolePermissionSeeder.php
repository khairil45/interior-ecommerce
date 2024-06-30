<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { {

            // Role
            $adminRole = Role::create(['name' => 'administrator']);
            $userRole  = Role::create(['name' => 'user']);

            // Permission
            // Admin
            Permission::create(['name' => 'manage_products']);
            Permission::create(['name' => 'manage_orders']);
            Permission::create(['name' => 'manage_users']);
            Permission::create(['name' => 'manage_memberships']);
            Permission::create(['name' => 'manage_complaints']);
            Permission::create(['name' => 'view_reports']);

            // User
            Permission::create(['name' => 'view_products']);
            Permission::create(['name' => 'add_to_cart']);
            Permission::create(['name' => 'checkout']);
            Permission::create(['name' => 'create_complaints']);

            $adminRole->givePermissionTo('manage_products', 'manage_orders', 'manage_users', 'manage_memberships', 'manage_complaints', 'view_reports');

            $userRole->givePermissionTo('view_products', 'add_to_cart', 'checkout', 'create_complaints');
        }
    }
}
