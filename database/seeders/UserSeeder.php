<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        //
        DB::table('users')->insert([
            'unique_id' => 'jua7phBAnvTgEiWeDiLZzxGp',
            'name' => 'New User Account',
            'email' => 'test@gmail.com',
            'slug' => 'seeded-user-account',
            'phone_number' => '0129832789',
            'gender' => 'male',
            'password' => Hash::make('1234567890'),
        ]);
    }
}
