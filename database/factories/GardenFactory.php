<?php

namespace Database\Factories;

use App\Models\Garden;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class GardenFactory extends Factory
{
    protected $model = Garden::class;

    public function definition(): array
    {
        return [
            'number' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
