<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([[
            'name'=>'tu',
            'email'=>'s@gmail.com',
            'password'=>Hash::make('1234'),
            'user_role'=>'user'
        ],
        [
            'name'=>'tu',
            'email'=>'d@gmail.com',
            'password'=>Hash::make('1234'),
            'user_role'=>'editor'
        ],
        [
            'name'=>'tu',
            'email'=>'f@gmail.com',
            'password'=>Hash::make('1234'),
            'user_role'=>'admin'
        ],
        [
            'name'=>'tu',
            'email'=>'g@gmail.com',
            'password'=>Hash::make('1234'),
            'user_role'=>'super_admin'
        ]
        ]);
    }
}
