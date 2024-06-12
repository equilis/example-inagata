<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'image' => 'https://img.freepik.com/free-vector/landing-page-template-design-business-websides_52683-22971.jpg?t=st=1718106265~exp=1718109865~hmac=c6876f31b93f01dd9d1ca8791bfc8b8ec513517da1db5bdce250f57b34bf71d3&w=1380',
            'title' => fake()->sentence,
            'upload' => fake()->dateTimeThisYear(),
            'description' => fake()->paragraph
        ];
    }
}