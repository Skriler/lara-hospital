<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tariff;
use App\Enums\SeedersConstants as SC;

class TariffFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tariff::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => $this->faker->numberBetween(SC::MIN_CODE, SC::MAX_CODE),
            'title' => $this->faker->word(),
            'operation_price' => $this->faker->numberBetween(SC::MIN_OPERATION_PRICE, SC::MAX_OPERATION_PRICE),
            'rehabilitation_day_price' => $this->faker->numberBetween(SC::MIN_REHABILITATION_PRICE, SC::MAX_REHABILITATION_PRICE),
        ];
    }
}
