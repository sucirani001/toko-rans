<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use App\Models\Distributor2;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

         User::create([
             'name' => 'user1',
             'email' => 'suci@gmail.com',
             'password' => bcrypt('123456789'),
             'point' => 10000,
         ]);

         Admin::create([
             'name' => 'admin',
             'username' => 'Admin',
             'email' => 'admin@gmail.com',
             'password' => bcrypt('123456789') ,
         ]);

        Distributor2::create([
            'nama_distributor' => 'suci',
            'lokasi' => 'damon',
            'kontak' => '0822867689',
            'email' => 'suci@gmail.com',
        ]);
    }
}