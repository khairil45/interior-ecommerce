<?php

namespace Database\Seeders;

use App\Models\Membership;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MembershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $memberships = [
            [
                'name'        => 'Silver',
                'description' => 'Membership Silver',
            ],
            [
                'name'        => 'Gold',
                'description' => 'Membership Gold',
            ],
            [
                'name'        => 'Platinum',
                'description' => 'Membership Platinum',
            ]
        ];

        foreach ($memberships as $membership) {
            Membership::create($membership);
        }
    }
}
