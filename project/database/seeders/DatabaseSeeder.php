<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       User::create([
        'name' => 'mostafa',
        'email' => 'mostafazzz115@gmail.com',
        'password' => Hash::make('password'),
        'phone_number' => '01116864977',
       ]);

       DB::table('users')->insert([
        'name' => 'mohamed',
        'email' => 'mohamedzzz115@gmail.com',
        'password' => Hash::make('password'),
        'phone_number' => '01116864978',
       ]);
    }
}
