<?php

namespace Modules\Financial\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Financial\Models\BankAccountType;

class BankAccountTypeFactory extends Factory
{
    protected $model = BankAccountType::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->words(2, true),
        ];
    }
}
