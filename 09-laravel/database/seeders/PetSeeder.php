<?php

namespace Database\Seeders;
use App\Models\Pet;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pet = new Pet;
        $pet->name = 'luz';
        $pet->kind = 'Dog';
        $pet->weight = 8.5;
        $pet->age = 3;
        $pet->bread = 'samoyedo';
        $pet->location = 'New York';
        $pet->save();


        $pet = new Pet;
        $pet->name = 'michi';
        $pet->kind = 'cat';
        $pet->weight = 1.5;
        $pet->age = 3;
        $pet->bread = 'persa';
        $pet->location = 'New York';
        $pet->save();


        $pet = new Pet;
        $pet->name = 'chin';
        $pet->kind = 'pig';
        $pet->weight = 11.5;
        $pet->age = 3;
        $pet->bread = 'mini';
        $pet->location = 'New York';
        $pet->save();

    }
}
