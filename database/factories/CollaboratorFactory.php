<?php

namespace Database\Factories;

use App\Models\Collaborator;
use Carbon\Carbon;
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

        $dt_birth = $this->faker->date($format = 'Y-m-d', $max = '2002-01-01');
        $age = Carbon::now()->diffInYears($dt_birth);

        return [
            'age' => $age,
            'cep' => $this->faker->postcode,
            'cpf' => $this->faker->cpf,
            'ocupattion' => $this->faker->jobTitle,
            'dt_birth' => $dt_birth,
            'address' => $this->faker->address,
            'manager_id' => $this->faker->numberBetween($min = 1, $max = 2),
            'created_by' => $this->faker->numberBetween($min = 1, $max = 2),
        ];
    }
}
