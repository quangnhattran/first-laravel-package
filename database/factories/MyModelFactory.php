<?php

namespace Qt\FirstLaravelPackage\Database\Factories;

use Qt\FirstLaravelPackage\Models\MyModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class MyModelFactory extends Factory
{
    protected $model = MyModel::class;

    public function definition()
    {
        return [
            'name' => $this->faker->firstName,
        ];
    }
}

