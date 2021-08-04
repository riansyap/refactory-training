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
            'nama_depan' => $this->faker->firstName(),
            'nama_belakang' => $this->faker->lastName(),
            'telepon_ponsel' => '081'.$this->faker->randomNumber($nbDigits = 9,$strict = true),
            'telepon_rumah' => '0'.$this->faker->numberBetween(1,3).$this->faker->randomNumber($nbDigits = 9,$strict = true),
            'email' => $this->faker->unique()->safeEmail(),
            'description' => $this->faker->paragraph(),
        ];

    }
}