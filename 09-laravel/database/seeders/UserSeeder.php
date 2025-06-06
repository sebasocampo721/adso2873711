<?php


namespace Database\Seeders;

use App\Models\User;
use App\Models\Pet; // o Pets si así está definido
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        Pet::factory()->count(10)->create();
        User::factory()->count(10)->create();

        // $user = new User;
        // $user->document = 750000;
        // $user->fullname = 'john ';
        // $user->gender = 'mal';
        // $user->birthdate = '1964-09-11';
        // $user->phone = '98765432';
        // $user->email = 'joh@gmail.com';
        // $user->password = bcrypt('admin');
        // $user->role = 'Admin';
        // $user->save();

        
        // //inser array
        // DB::table('users')->insert([
        //     'document' => 7500001,
        //     'fullname' => 'john wick',
        //     'gender' => 'male',
        //     'birthdate' => '1964-09-12',
        //     'phone' => '987654321',
        //     'email' => 'john@gmail.com',
        //     'password' => hash::make('12345'),
        //     'created_at' => now(),
        // ]);
    }
}
