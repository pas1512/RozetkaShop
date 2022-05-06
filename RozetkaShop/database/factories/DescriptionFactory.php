<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Description;
use App\Models\Product;
use App\Models\Country;
use App\Models\LogisticParameters;

class DescriptionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Description::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $states = ['used','refarb','new'];
        return [
            'state' => $states[rand(0,2)],
            'ean' => $this->faker->ean13(),
            'description'=> $this->faker->text(2000),
            'added_at' => $this->faker->dateTime('now', null),
            'product_id' => Product::factory()->create()->id,
            'country_id' => Country::factory()->create()->id,
            'logistic_parameters_id' => LogisticParameters::factory()->create()->id
        ];
    }
}
