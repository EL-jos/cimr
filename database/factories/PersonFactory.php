<?php

namespace Database\Factories;

use App\Models\Gender;
use App\Models\MaritalStatus;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstname' => $this->faker->firstName(),
            'lastname' => $this->faker->lastName(),
            'birthdate' => $this->faker->date(),
            'kids' => $this->faker->numberBetween(),
            'gender_id' => Gender::inRandomOrder()->first()->id,
            'marital_status_id' => MaritalStatus::inRandomOrder()->first()->id,
            'post_id' => Post::inRandomOrder()->first()->id,
            'hire_date' => $this->faker->date(),
        ];
    }
}
