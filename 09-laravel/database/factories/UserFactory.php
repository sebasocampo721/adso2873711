<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    $gender = fake()->randomElement(['female', 'male']);

    // Corrección de operador ternario
    $name = ($gender == 'female') ? fake()->firstNameFemale() : fake()->firstNameMale();
    $g = ($gender == 'female') ? 'girl' : 'boy';

    $id = fake()->numerify('75######');

    // Guardar imagen en public/storage/images
    $imageUrl = 'https://avatar.iran.liara.run/public/' . $g;
    $imagePath = 'images/' . $id . '.png';
    copy($imageUrl, public_path('storage/' . $imagePath));

    return [
        'document' => fake()->numberBetween(77000300, 79000800),
        'gender' => $gender,
        'fullname' => $name . ' ' . fake()->lastName(),
        'birthdate' => fake()->dateTimeBetween('1977-01-01', '2007-12-31')->format('Y-m-d'),
        'phone' => fake()->phoneNumber(),
        'email' => fake()->unique()->safeEmail(),
        'email_verified_at' => now(),
        'password' => static::$password ??= Hash::make('1234'),
        'remember_token' => Str::random(10),
        'photo' => $imagePath,
    ];
}



    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
