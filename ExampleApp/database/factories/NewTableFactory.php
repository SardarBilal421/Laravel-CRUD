<?php

namespace Database\Factories;

use App\Models\NewTable;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewTableFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = NewTable::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'image' => $this->faker->imageUrl(640,80,'natural')

        ];
    }
}
