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
            'TypeProd' => $this->faker->randomElement($array = array ('Numérique','Composant','Console')),
            'PrixProd' => $this->faker->numerify('##'),
            'NomProd' => $this->faker->randomElement($array = array ('Ordinateur','Câble','Processeur','Carte graphique','Barette de RAM','Souris','Clavier','Playstation 5','Xbox series X','Nintendo Switch','Alimentation','Disque dur','SSD')),
            'LibProd' => $this->faker->randomElement($array = array ('Ordinateur','Câble','Processeur','Carte graphique','Barette de RAM','Souris','Clavier','Playstation 5','Xbox series X','Nintendo Switch','Alimentation','Disque dur','SSD')),
        ];
    }
}
