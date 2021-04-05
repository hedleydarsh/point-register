<?php

namespace Database\Factories;

use App\Models\Collaborator;
use Illuminate\Database\Eloquent\Factories\Factory;

class CollaboratorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Collaborator::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cep' => $this->faker->postcode,
            'cpf' => $this->faker->cpf,
            'ocupattion' => $this->faker->jobTitle,
            'dt_birth' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'address' => $this->faker->address,
            'manager_id' => $this->faker->numberBetween($min = 1, $max = 2),
            'created_by' => $this->faker->numberBetween($min = 1, $max = 2),
        ];
    }
}
