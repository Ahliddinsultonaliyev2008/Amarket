<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'phone' => 1234567890,
            'role' => User::roles['admin'],
            'password' => Hash::make("1234567890"),
            'email' => 'admin@gmail.com',
        ]);
        \App\Models\User::factory()->create([
            'name' => 'client',
            'phone' => 12344566543,
            'role' => User::roles['admin'],
            'password' => Hash::make("12344566543"),
            'email' => 'client@gmail.com',
        ]);
    }
}
