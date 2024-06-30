<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'membership_id'         => '1',
            'name'                  => 'administrator',
            'email'                 => 'example@email.com',
            'phone_number'          => '081234567891',
            'address'               => 'Jl ...',
            'postal_code'           => '012345',
            'is_whatsapp_connected' => false,
            'password'              => bcrypt('administrator')
        ]);

        $admin->assignRole('administrator');

        $user = User::create([
            'membership_id'         => '2',
            'name'                  => 'user',
            'email'                 => 'user@email.com',
            'phone_number'          => '081987654321',
            'address'               => 'Jl ...',
            'postal_code'           => '054321',
            'is_whatsapp_connected' => false,
            'password'              => bcrypt('userlogin')
        ]);

        $user->assignRole('user');
    }
}
