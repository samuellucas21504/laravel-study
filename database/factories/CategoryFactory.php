<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    private $i = 0;
    private $categories = [
        'Sci-fi',
        'Action',
        'Romance',
        'Philosophy'
    ];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=> $this->categories[$this->i++],
        ];
    }

    public function posts() {
        $this->hasMany(Post::class);
    }
}
