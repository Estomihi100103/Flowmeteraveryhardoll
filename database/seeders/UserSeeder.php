<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //make seeder for user table here 
        $users = [
            [
                'name' => 'Admin',
                'email' => 'estopangaribuan@gmail.com',
                'password' => bcrypt('admin123'),
                'role' => 'admin',
            ],
        ];
        DB::table('users')->insert($users);
    }
}
