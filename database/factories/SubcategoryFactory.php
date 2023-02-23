<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Subcategory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subcategory>
 */
class SubcategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     *
     */

    protected $model = Subcategory::class;
    public function definition()
    {
        return [
            'image' => 'subcategories/' . $this->faker->image('public/storage/subcategories', 640, 480, null, false),
        ];
    }
}
