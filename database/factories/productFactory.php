<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use Nette\Utils\Random;
use Ramsey\Uuid\Type\Decimal;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product>
 */
class productFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name= fake()->unique()->words($nb=2,$asText=true);
        $slug = Str::slug($name);
        $random = rand(0,3);
        $category = ['phones and gadgets','wears','shoes','electronics'];
        return [
            
            'product_name'=> $name,
            'price'=> fake()->unique()->numberBetween(199.99,999.99),
            'description'=> fake()->text(500),
            'product_category'=> $category[$random],

        ];
    }
}
