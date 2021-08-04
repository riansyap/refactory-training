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
            'nama_depan' => $this->faker->name(),
            'nama_belakang' => $this->faker->name(),
            'telepon_ponsel' => '0738217893',
            'telepon_rumah' => '03213213667',
            'email' => $this->faker->unique()->safeEmail,
            'description' => $this->faker->paragraph(),
        ];

    }
}