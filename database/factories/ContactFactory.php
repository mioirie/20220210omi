<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fullname' => $this->faker->name,
            'gender' => $this->faker->shuffle,
            'email' => $this->faker->safeEmail,
            'postcode' => $this->faker->randomNumber,
            'address' => $this->faker->word,
            'building_name' => $this->faker->word,
            'opinion'=> $this->faker->sentence,
            'created_at' => $this->faker->date,
            'updated_at' => $this->faker->date,
        ];
    }
}
