<?php

namespace App\Containers\AppSection\Item\Data\Factories;

use App\Containers\AppSection\Item\Models\Item;
use App\Ship\Parents\Factories\Factory as ParentFactory;

class ItemFactory extends ParentFactory
{
    protected $model = Item::class;

    public function definition(): array
    {
        return [
            // Add your model fields here
            // 'name' => $this->faker->name(),
        ];
    }
}
