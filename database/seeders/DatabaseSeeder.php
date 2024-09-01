<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // Créer un utilisateur de test
        DB::table('users')->insert([
            'name' => 'Ulysse',
            'email' => 'tet@example.com',
            'password' => Hash::make('password'), // Assurez-vous de hasher le mot de passe
        ]);
        DB::table('users')->insert([
            'name' => 'Bill',
            'email' => 'test@example.com',
            'password' => Hash::make('password'), // Assurez-vous de hasher le mot de passe
        ]);
        DB::table('users')->insert([
            'name' => 'Quevin',
            'email' => 'tst@example.com',
            'password' => Hash::make('password'), // Assurez-vous de hasher le mot de passe
        ]);

       

    }
}
