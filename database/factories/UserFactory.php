<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'username' => $this->faker->unique()->userName(),
            'avatar' => 'https://i.pravatar.cc/150?img=' . $this->faker->numberBetween(1, 70),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'profile' => $this->faker->sentence(14),
            'location' => $this->faker->city() . ', ' . $this->faker->country(),
            'link' => $this->faker->url(),
            'linkText' => $this->faker->domainName(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'created_at' => $this->faker->dateTimeBetween('-5 years'),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
