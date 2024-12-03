<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        User::create([
            'name' => "User",
            'email' => "user@motionmovies.com",
            'password' => bcrypt("12345678"),
            'remember_token' => Str::random(),
            'plan_id' => 1
        ]); 
        User::create([
            'name' => "User",
            'email' => "paid@motionmovies.com",
            'password' => bcrypt("12345678"),
            'remember_token' => Str::random(),
            'plan_id' => 2
        ]); 
        User::create([
            'name' => "Admin",
            'email' => "admin@motionmovies.com",
            'password' => bcrypt("12345678"),
            'remember_token' => Str::random(),
            'plan_id' => 3
        ]); 
        User::create([
            'name' => "Alvin Zanua Putra",
            'email' => "zanaputraalvin123@gmail.com",
            'password' => bcrypt("12345678"),
            'remember_token' => Str::random(),
            'plan_id' => 1
        ]); 
        User::create([
            'name' => "Yahya Ayyash Ashdaqi",
            'email' => "yahyaayyash125@gmail.com",
            'password' => bcrypt("12345678"),
            'remember_token' => Str::random(),
            'plan_id' => 1
        ]); 
        User::create([
            'name' => "Imam Kuswardayan S.Kom., M.T.",
            'email' => "imamkuswadayan@its.ac.id",
            'password' => bcrypt("12345678"),
            'remember_token' => Str::random(),
            'plan_id' => 2
        ]); 
        User::create([
            'name' => "Alvin Zanua Putra",
            'email' => "5025231064@student.its.ac.id",
            'password' => bcrypt("12345678"),
            'remember_token' => Str::random(),
            'plan_id' => 2
        ]); 
    }
}
