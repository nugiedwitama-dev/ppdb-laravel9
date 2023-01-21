<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PagesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => 'About',
            'slug' => 'about',
            'image' => 'https://images.unsplash.com/photo-1496200186974-4293800e2c20?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1932&q=80',
            'body' =>'<p>'. implode('</p><p>', $this->faker->paragraphs(mt_rand(5,10))). '</p>' 
        ];
        [
            'title' => 'Contact',
            'slug' => 'contact',
            'image' => 'https://images.unsplash.com/photo-1496200186974-4293800e2c20?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1932&q=80',
            'body' =>'<p>'. implode('</p><p>', $this->faker->paragraphs(mt_rand(5,10))). '</p>' 
        ];
    }
}
