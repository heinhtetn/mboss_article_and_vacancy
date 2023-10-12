<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VacancyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'type' => $this->faker->word,
            'description' => $this->faker->paragraphs(2, true),
            'requirements' => $this->faker->sentences(5, true),
            'benefits' => $this->faker->sentence,
            'genders' => 'Male,Female',
            'post_qty' => $this->faker->numberBetween(1,5),
            'salary' => $this->faker->numberBetween(200000, 10000000),
            'deadline' => $this->faker->date,
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'working_hours' => '9:00 - 5:00',
            'address' => $this->faker->address
        ];
    }
}
