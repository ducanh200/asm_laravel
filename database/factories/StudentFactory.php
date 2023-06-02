<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class   StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->name,
            "age"=> random_int(15, 50),
            "address"=>$this->faker->text(50),
            "telephone"=> random_int(1000000000, 2000000000)
        ];
    }
}
