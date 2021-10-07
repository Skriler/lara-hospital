<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Patient;
use App\Enums\SeedersConstants as SC;

class PatientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Patient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'surname' => $this->faker->lastName(),
            'birth_date' => $this->faker->dateTimeBetween('-60 years', '-10 years'),
            'category' => $this->faker->word(),
            'gender' => SC::GENDERS[rand(0, SC::GENDERS_COUNT)],
            'operation_date' => $this->faker->dateTimeBetween('-10 years'),
            'treatment_term' => $this->faker->numberBetween(1, 50),
            'surgeon_id' => rand(1, SC::SURGEONS_COUNT),
            'tariff_id' => rand(1, SC::TARIFFS_COUNT),
        ];
    }
}
