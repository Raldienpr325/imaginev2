<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('12345678')
        ]);
    
        User::create([
            'name' => 'user',
            'email' => 'user@example.com',
            'password' => bcrypt('12345678')
        ]);
    }
}