<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\filters>
 */
class filtersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'SCT'-> $faker ->numerify('sb-###'),
            'NRG '->$faker ->numerify('N-###'),
            'FILTRON'->$faker ->numerify('fil-###'),
            'MANN'->$faker ->numerify('mann-###'),
            'OE'->$faker ->randomNumber(5, true),
            'deposit'->$faker ->randomNumber(1, true),
            'price'->$faker ->randomNumber(3, true),
            'commentary'->$faker ->sentence(5)
        ];
    }
}
