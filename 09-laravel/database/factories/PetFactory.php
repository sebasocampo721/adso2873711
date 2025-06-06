<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet>
 */
class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

    $pets = [
        'Bambi', 'Simba', 'Luna', 'Max', 'Bella', 'Rocky', 'Milo', 'Nala', 'Coco', 'Thor',
        'Sasha', 'Zeus', 'Toby', 'Kira', 'Chispa', 'Leo', 'Lola', 'Bruno', 'Maya', 'Rex',
        'Daisy', 'Chloe', 'Lucky', 'Canela', 'Buddy', 'Tasha', 'Chester', 'Fiona', 'Nube', 'Boby',
        'Gala', 'Floki', 'Tango', 'Lili', 'Gordo', 'Tina', 'Milo', 'Nina', 'Oreo', 'Toby',
        'Duke', 'Sandy', 'Milo', 'Snow', 'Kiwi', 'Tizón', 'Lolo', 'Greta', 'Jazz', 'Mika',
        'Bolt', 'Rocco', 'Miel', 'Cielo', 'Ares', 'Estrella', 'Timon', 'Lupo', 'Chispa', 'Pepe',
        'Bingo', 'Perla', 'Simón', 'Candy', 'Firu', 'Duna', 'Rambo', 'Sol', 'Lupo', 'Asia',
        'Togo', 'Bimba', 'Frosty', 'Bambi', 'Gala', 'Maple', 'Dory', 'Ron', 'Rulo', 'Toby',
        'Kiko', 'Loba', 'Noa', 'Pelusa', 'Jazz', 'Boby', 'Chula', 'Niko', 'Bimbo', 'Tina',
        'Flaca', 'Hueso', 'Loki', 'Osa', 'Chispi', 'Bola', 'Mimi', 'Yako', 'Gala', 'Copito'
    ];

        return [
            'name' => $pets[array_rand($pets)] . fake()->numerify('8'),
            'kind' =>fake()->randomElement(['dog', 'cat', 'bird', 'mouse']),
            'weight' =>fake()->numberBetween(1, 80),
            'age' =>fake()->randomNumber(2, true),
            'breed' =>fake()->colorName(),
            'location' =>fake()->city(10),
            'description'=>fake()->sentence(10),
            'created_at'=>now()
        ];
    }
}
