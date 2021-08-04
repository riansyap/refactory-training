<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_depan' => $this->faker->sentence(),
            'nama_belakang' => $this->faker->sentence(),
            'telepon_ponsel' => $this->faker->sentence(),
            'telepon_rumah' => $this->faker->sentence(),
            'email' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
        ];

    }
}