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
            "nom_article" => $this->faker->firstName,
            "roleOuSerie" => $this->faker->lastName,
            "id_typeArticle" => rand(1,6),
            "img1_article" => $this->faker->imageUrl(),
            "img2_article" => $this->faker->imageUrl(),
            "img3_article" => $this->faker->imageUrl(),
            "img4_article" => $this->faker->imageUrl(),
            "prix_promo" => $this->faker->numerify,
            "prix_article" => $this->faker->numerify,
            "description_article" => $this->faker->text(15),
            "mode_utilisation" => $this->faker->text(25)
        ];
    }
}
