<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = [
            [
                'name' => 'Onyekachi Ekeh',
                'email' => 'onyekachi@bluespaceafrica.com',
                'email_verified_at' => now(),
                'password' => bcrypt('iwd2023admin'),
                'remember_token' => Str::random(60),
            ]
        ];

        foreach ($admins as $admin) {
            User::create($admin);
        }
    }
}
