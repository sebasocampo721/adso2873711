<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $user = new User;
        $user->document = 750000;
        $user->fullname = 'john ';
        $user->gender = 'mal';
        $user->birthdate = '1964-09-11';
        $user->phone = '98765432';
        $user->email = 'joh@gmail.com';
        $user->password = bcrypt('admin');
        $user->role = 'Admin';
        $user->save();

        
        //inser array
        DB::table('users')->insert([
            'document' => 7500001,
            'fullname' => 'john wick',
            'gender' => 'male',
            'birthdate' => '1964-09-12',
            'phone' => '987654321',
            'email' => 'john@gmail.com',
            'password' => hash::make('12345'),
            'created_at' => now(),
        ]);
    }
}
