<?php

namespace Database\Factories;

use App\Models\Sokhna;
use Illuminate\Database\Eloquent\Factories\Factory;

class SokhnaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sokhna::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'prenom' => $this->faker->word,
        'nom' => $this->faker->word,
        'telephone' => $this->faker->word,
        'adresse' => $this->faker->word,
        'email' => $this->faker->word,
        'dateReproduction' => $this->faker->word,
        'lot_id' => $this->faker->word,
        'user_id' => $this->faker->word,
        'mortalite_male' => $this->faker->randomDigitNotNull,
        'mortalite_femelle' => $this->faker->randomDigitNotNull,
        'mortalite_totale' => $this->faker->randomDigitNotNull,
        'ponte_totale' => $this->faker->randomDigitNotNull,
        'mous' => $this->faker->word,
        'casses' => $this->faker->word,
        'feles' => $this->faker->word,
        'rugueux' => $this->faker->word,
        'gros' => $this->faker->word,
        'petits' => $this->faker->word,
        'difformes' => $this->faker->word,
        'couleur' => $this->faker->word,
        'gel' => $this->faker->word,
        'evenement' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
