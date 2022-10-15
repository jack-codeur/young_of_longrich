<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produit>
 */
class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "nom_produit" => $this->faker->firstName,
            "maladie" => $this->faker->lastName,
            "id_typeArticle" => rand(1,6),
            "image_produit" => $this->faker->imageUrl(),
            "prix_promo" => $this->faker->numerify,
            "prix_reel" => $this->faker->numerify,
            "description_produit" => $this->faker->text(15),
            "mode_utilisation" => $this->faker->text(25)
        ];
    }
}
