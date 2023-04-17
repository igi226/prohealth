<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
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
        $faker = Faker::create();
        for($i = 1; $i<=70; $i++){
        $data = new User();
        $data->name = $faker->name;
        $data->slug = $faker->unique()->slug(3);
        $data->email = $faker->email;
        $data->phone = $faker->numerify('########');
        // $data->status = $faker->boolean();
        $data->password = Hash::make($faker->word);
        
      
        $data->status = $faker->boolean;
        $data->save();
        }
    }
}
