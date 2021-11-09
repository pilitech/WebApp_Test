<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Contact::class;


    public function definition()
    {
        return [
            'id' => $this->faker->numberBetween($min = 1, $max = 10),
            'name' => $this->faker->name(),
            'gender' => $this->faker->randomElement($array = ['男性', '女性']),
            'email' => $this->faker->email(),
            'postcode' => $this->faker->regexify('[1-9]{3}-[0-9]{4}'),
            'address' => $this->faker->address(),
            'building_name' => $this->faker->secondaryAddress(),
            'opinion' => $this->faker->realText(120),
            'created_at' => $this->faker->dateTime('Y-m-d H:i:s'),
            'updated_at' => $this->faker->dateTime('Y-m-d H:i:s'),
        ];
    }
}
