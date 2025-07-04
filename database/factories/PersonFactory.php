<?php

namespace Database\Factories;

use Alirezasedghi\LaravelImageFaker\ImageFaker;
use Alirezasedghi\LaravelImageFaker\Services\Picsum;
use App\Models\Gender;
use App\Models\MaritalStatus;
use App\Models\Person;
use App\Models\Post;
use App\Models\Role;
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
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Person $person) {
            $person->save();

            // Sélectionnez un ou deux gardiens existants
            $roles = Role::inRandomOrder()->take(1)->get();
            $person->roles()->attach($roles);

            $imageFaker = new ImageFaker(new Picsum());

            $filePath = $imageFaker->image(public_path("assets/resources/persons"));
            $filename = basename($filePath); // ex. "abc123.jpg"
            $relative = "assets/resources/persons/$filename";

            $person->document()->create([
                "type" => "image",
                "path" => $relative,
            ]);
        });
    }
}
