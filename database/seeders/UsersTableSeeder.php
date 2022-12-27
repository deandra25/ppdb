<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory()->create([
        //     'nama' => 'Revan Rionaldo',
        //     'email' => 'devanrld@gmail.com',
        //     'role' => 'admin',
        //     'password' => bcrypt('password'),
        // ]);

        $user = new User;
        $user->nama = "Revan Rionaldo";
        $user->email = "devanrld@gmail.com";
        $user->password = bcrypt('password'); 
        $user->role = "admin";
        $user->save();
    }
}
