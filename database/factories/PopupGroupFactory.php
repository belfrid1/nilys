<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PopupGroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => "Santé",
            'guid' => "1234e5678-eazerty57-47mp-23kn"
        ];
    }
}
