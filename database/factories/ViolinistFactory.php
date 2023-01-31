<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Violinist>
 */
class ViolinistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "slug" => $this->faker->text(10),
            "violinist_name" => $this->faker->text(30),
            "violinist_nationality" => $this->faker->text(),
            "violinist_born" => $this->faker->dateTimeThisMonth(),
            "violinist_died" =>$this->faker->dateTimeThisMonth(),
        ];
    }
}
