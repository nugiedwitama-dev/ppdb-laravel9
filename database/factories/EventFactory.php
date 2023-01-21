<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(3,8)),
            'slug' => $this->faker->slug(),
            'exc' => $this->faker->paragraph(),
            'desc' =>'<p>'. implode('</p><p>', $this->faker->paragraphs(mt_rand(5,10))). '</p>' ,
            'link' => mt_rand(1,5),
        ];
    }
}
