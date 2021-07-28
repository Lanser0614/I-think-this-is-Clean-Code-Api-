<?php

namespace Database\Factories;

use App\Models\Desk;
use App\Models\DeskList;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeskListFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DeskList::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text($maxNbChars = 230),
            'desk_id' => rand(1, Desk::count())
        ];
    }
}
