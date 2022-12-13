<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
            'name' => 'Jahon',
            'email' => 'namuna@gmail.com',
            'password' => Hash::make('secret'),
        ]);
        
        // User::factory(10)->create();
        // User::factory(10)->make();
        // User::factory()->create([
        //     'email' => 'ustidan@yozilgan.email'
        // ]);
        
    }
}
