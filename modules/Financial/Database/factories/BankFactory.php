<?php

namespace Modules\Financial\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Financial\Models\Bank;

class BankFactory extends Factory
{
    protected $model = Bank::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'code' => (string)$this->faker->numberBetween(1, 999),
            'digit' => (string)$this->faker->numberBetween(1, 2),
        ];
    }
}
