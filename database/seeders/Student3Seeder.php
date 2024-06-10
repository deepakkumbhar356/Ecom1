<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class Student3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('student3')->insert([
        //     'name'=>Str::random(10),
        //     'email'=>Str::random(10).'@gmail.com',
        //     'password'=>Hash::make(Str::random(10)),
        // ]);
        $faker =Faker::create();
        foreach (range(1,5) as $value){
            DB::table('student3')->insert([
                'name'=>$faker->name(),
                'email'=>$faker->unique()->email,
                'password'=>Hash::make($faker->password),
            ]);
        }
        
    }
}
