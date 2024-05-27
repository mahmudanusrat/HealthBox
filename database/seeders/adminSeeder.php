<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')
            ->insert([
                'name'=>'admin',
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('admin'),
                'utype'=>'admin',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ]);
    }
}
