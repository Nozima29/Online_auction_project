<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\News;
use Faker\Generator as Faker;

$factory->define(News::class, function (Faker $faker) {
    return [
        'news' => $faker->sentence($nbWords = 4),
        'place' => $faker->address()
    ];
});
