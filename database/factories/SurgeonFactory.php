<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Surgeon;
use App\Enums\SeedersConstants as SC;

class SurgeonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Surgeon::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => $this->faker->numberBetween(SC::MIN_CODE, SC::MAX_CODE),
            'surname' => $this->faker->lastName(),
            'birth_date' => $this->faker->dateTimeBetween('-50 years', '-25 years'),
            'category' => $this->faker->word(),
            'gender' => SC::GENDERS[rand(0, SC::GENDERS_COUNT)],
            'home_phone' => $this->faker->e164PhoneNumber(),
        ];
    }
}
