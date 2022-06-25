<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'type' => 'client',
            'name' => 'Client User',
            'email' => 'client@client.com',
            'phone' => '01234567890',
            'password' => Hash::make('password'),
        ])->assignRole('client');

        User::create([
            'type' => 'staff',
            'name' => 'Staff User',
            'email' => 'staff@staff.com',
            'phone' => '01234567891',
            'password' => Hash::make('password'),
        ])->assignRole('staff');
    }
}
