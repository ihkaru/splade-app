<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>"Ihza Fikri Zaki Karunia",
            "email"=>"ihza2karunia@gmail.com",
            'email_verified_at'=>now(),
            'password'=>'$2y$10$Fcns80P6RgQFqx4We9h1U.1yRPl9RhKy2xp7YuviFeDjtLNby.cYS'
        ]);
    }
}
