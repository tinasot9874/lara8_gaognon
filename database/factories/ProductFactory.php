<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;


class ProductFactory extends Factory
{

    protected $model = Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->unique()->numerify('Product-#'),
            'category_id' => $this->faker->numberBetween(1,5),
            'shortdesc' => $this->faker->paragraph(),
            'longdesc' => $this->faker->paragraphs(2, true),
            'tags'  => $this->faker->word(),
            'slug' => $this->faker->unique()->numerify('product-#'),
            'thumbnail' => $this->faker->numerify('assets/media/stock/ecommerce/#.gif'),
            'sku' => $this->faker->unique()->regexify('[A-Z]{3}[1-9]{4}'),
            'price' => $this->faker->numberBetween(100,800),
            'status' => $this->faker->numberBetween(0,2),
        ];
    }
}
