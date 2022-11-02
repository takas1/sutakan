<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'test',
                'email' => 'test@mail.com',
                'password' => Hash::make('pass1234'),
            ],
            [
                'name' => 'test2',
                'email' => 'test2@mail.com',
                'password' => Hash::make('pass1234'),
            ],
            [
                'name' => 'test3',
                'email' => 'test3@mail.com',
                'password' => Hash::make('pass1234'),
            ],
        ]);
    }
}
