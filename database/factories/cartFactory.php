<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\cart>
 */
class cartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name= fake()->unique()->words($nb=2,$asText=true);

        $status= [ 'pending', 'ordered'];
        $cartId = date('Y').rand(14657432,90028388);
        $slug = Str::slug($name);

        return [
            'id' => $cartId,

            'user_id' => rand(1,6),
            
            'product_id' => rand(1,50),

            'product_name' => $slug,

            'product_price' => rand(199.99,999.99),

            'status' => $status[rand(0,1)],

            'quantity' => rand(1,20),
        ];
    }
}
