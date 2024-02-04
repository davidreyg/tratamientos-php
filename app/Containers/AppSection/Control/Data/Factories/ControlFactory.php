<?php

namespace App\Containers\AppSection\Control\Data\Factories;

use App\Containers\AppSection\Control\Models\Control;
use App\Ship\Parents\Factories\Factory as ParentFactory;

class ControlFactory extends ParentFactory
{
    protected $model = Control::class;

    public function definition(): array
    {
        return [
            // Add your model fields here
            // 'name' => $this->faker->name(),
        ];
    }
}
