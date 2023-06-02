<?php

namespace Database\Factories;
use App\Models\Kesediaan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kesediaan>
 */
class KesediaanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id_dudi' => $this->faker->numberBetween(1, 2), 
        ];
    }
}
