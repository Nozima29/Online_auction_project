<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()
                        ->randomElement([
                            'Car & Vehicles',
                            'Clothing',
                            'Electronics',
                            'Home & Garden',
                            'Pet & Animals',
                            'Property'
                            ]),
    ];
});
