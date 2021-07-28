<?php

namespace Database\Factories;

use App\Models\Card;
use App\Models\DeskList;
use Illuminate\Database\Eloquent\Factories\Factory;

class CardFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Card::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text($maxNbChars = 230),
            'desk_list_id' => rand(1, DeskList::count())
        ];
    }
}
