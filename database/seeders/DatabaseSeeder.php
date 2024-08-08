<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin Guntur',
            'role' => 'admin',
            'email' => 'guntur121205@gmail.com',
            'password' => Hash::make('Guntur12')
        ]);
        User::create([
            'name' => 'Admin Vallenixia',
            'role' => 'admin',
            'email' => 'vallenixia@gmail.com',
            'password' => Hash::make('Vallen22')
        ]);
        User::create([
            'name' => 'Kasir Hanan',
            'role' => 'kasir',
            'email' => 'kasirhanan@onlenkan.com',
            'password' => Hash::make('kasirhanan')
        ]);
        User::create([
            'name' => 'Kasir 01',
            'role' => 'kasir',
            'email' => 'kasir01@gmail.com',
            'password' => Hash::make('kasir1')
        ]);
    }
}
