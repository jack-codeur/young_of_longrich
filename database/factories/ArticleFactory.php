<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "model_article" => $this->faker->firstName,
            "id_typeArticle" => rand(1,6),
            "image_article" => $this->faker->imageUrl(),
            "prix_promo" => $this->faker->numerify,
            "prix_reel" => $this->faker->numerify,
            "caracteristique" => $this->faker->text(15),
        ];
    }
}
