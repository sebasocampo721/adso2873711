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
        $pet->breed = 'samoyedo';
        $pet->location = 'New York';
        $pet->description = 'bañar dos veces a la semana';
        $pet->save();


        $pet = new Pet;
        $pet->name = 'michi';
        $pet->kind = 'cat';
        $pet->weight = 1.5;
        $pet->age = 3;
        $pet->breed = 'persa';
        $pet->location = 'New York';
        $pet->description = 'bañar tres veces a la semana';

        $pet->save();


        $pet = new Pet;
        $pet->name = 'chin';
        $pet->kind = 'pig';
        $pet->weight = 11.5;
        $pet->age = 3;
        $pet->breed = 'mini';
        $pet->location = 'New York';
        $pet->description = 'es dificil de bañar';

        $pet->save();

    }
}
