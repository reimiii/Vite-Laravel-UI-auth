<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role = [
            [
                'name'       => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => 's_user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        $admin = [
            [
                'name'              => 'admin',
                'email'             => 'imiia75775@gmail.com',
                'email_verified_at' => now(),
                'password'          => Hash::make('password'),
                'role_id'           => 1,
            ],
            [
                'name'              => 'super_user',
                'email'             => 'super@gmail.com',
                'email_verified_at' => now(),
                'password'          => Hash::make('password'),
                'role_id'           => 2,
            ],
        ];

        Role::insert($role);
        \App\Models\User::insert($admin);

    }

}
