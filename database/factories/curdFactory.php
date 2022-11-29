<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\curd>
 */
class curdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'brandname'=>$this->faker->name(10),
            'modelname'=>$this->faker->name(10),
            'quantity'=>$this->faker->numberBetween(50,200),
            'remark'=>$this->faker->text(50),
            'user_id'=>$this->faker->numberBetween(1,10),
        ];
    }
}
