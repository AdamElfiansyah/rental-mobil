<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
<<<<<<< HEAD
use Illuminate\Support\Facades\Hash;
=======
<<<<<<< HEAD
use Illuminate\Support\Facades\Hash;
=======
<<<<<<< HEAD
use Illuminate\Support\Facades\Hash;
=======
>>>>>>> ac37d0b2 (pertemuan-12)
>>>>>>> 59c60a5 (pertemuan-12)
>>>>>>> 5887767 (pertemuan-12)
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 59c60a5 (pertemuan-12)
>>>>>>> 5887767 (pertemuan-12)
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> ac37d0b2 (pertemuan-12)
>>>>>>> 59c60a5 (pertemuan-12)
>>>>>>> 5887767 (pertemuan-12)
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
<<<<<<< HEAD
    public function definition(): array
=======
<<<<<<< HEAD
    public function definition(): array
=======
<<<<<<< HEAD
    public function definition(): array
=======
    public function definition()
>>>>>>> ac37d0b2 (pertemuan-12)
>>>>>>> 59c60a5 (pertemuan-12)
>>>>>>> 5887767 (pertemuan-12)
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
<<<<<<< HEAD
            'password' => static::$password ??= Hash::make('password'),
=======
<<<<<<< HEAD
            'password' => static::$password ??= Hash::make('password'),
=======
<<<<<<< HEAD
            'password' => static::$password ??= Hash::make('password'),
=======
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
>>>>>>> ac37d0b2 (pertemuan-12)
>>>>>>> 59c60a5 (pertemuan-12)
>>>>>>> 5887767 (pertemuan-12)
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
<<<<<<< HEAD
     */
    public function unverified(): static
=======
<<<<<<< HEAD
     */
    public function unverified(): static
=======
<<<<<<< HEAD
     */
    public function unverified(): static
=======
     *
     * @return static
     */
    public function unverified()
>>>>>>> ac37d0b2 (pertemuan-12)
>>>>>>> 59c60a5 (pertemuan-12)
>>>>>>> 5887767 (pertemuan-12)
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
