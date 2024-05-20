<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Peter Adetola', // Replace with desired first name
            'username' => 'admin', // Replace with desired username
            'email' => 'admin@email.com', // Replace with desired email
            'password' => Hash::make('secret'), // Replace with desired password
        ]);
    }
}
