<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Pegawai;

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
        Pegawai::create([
            'NIP' => 1234,
            'namalengkap' => 'aldin',
            'jeniskelamin' => 'a'
        ]);
    
      
   
    }
}