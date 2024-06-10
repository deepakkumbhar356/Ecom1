<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class Student2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('student2')->insert([
        //     'id'=>'2',
        //     'name'=>'Babu',
        //     'email'=>'babu@gmail.com',
        //     'password'=>Hash::make('babu123456'),
        // ]);
        //  DB::table('student2')->insert([
        //     // 'id'=> '3',
        //     'name'=>Str::random(10),
        //     'email'=>Str::random(10).'@gmail.com',
        //     'password'=>Hash::make(Str::random(10)),
        // ]);
        $faker =Faker::create();
        foreach (range(1,10) as $value)
        DB::table('student2')->insert([
            // 'id'=> '3',
            'name'=>$faker->name(),
            'email'=>$faker->unique()->safeEmail(),
            'password'=>Hash::make($faker->password()),
        ]);
    }
}
