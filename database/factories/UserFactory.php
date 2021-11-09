<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    public function run()
    {
        $this->call(ContactTableSeeder::class);
    }
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {

    }
}
