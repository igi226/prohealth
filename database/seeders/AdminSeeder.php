<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            "name" => "Admin Healthhoodlum",
            "email" => "admin@mail.com",
            "password" => Hash::make("12345678"),
            "slug" => "admin-healthhoodlum",
            "status" => "1",
        ]);
    }
}
