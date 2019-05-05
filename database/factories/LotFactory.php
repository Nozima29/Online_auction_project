<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Lot;
use Faker\Generator as Faker;

$factory->define(Lot::class, function (Faker $faker) {
    return [
        //        'image_url' => $faker->image('public/storage/images',400,300),
        'title' => $faker->sentence($nbWords = 4),
        'description' => $faker->text(),
        'highest_bid' => $faker->numberBetween(10, 15000),
        'starting_price' => $faker->numberBetween(10, 15000),
        'country' => $faker->country(),
        'city' => $faker->city(),
        'address' => $faker->address(),
        'posted_at' => $faker->dateTimeBetween($startDate = '-3 years', $endDate = 'now'),
        'expired_at' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+3 years'),
        'status' => $faker->randomElement(['approved', 'pending', 'blocked']),
        'user_id' => $faker->numberBetween(1,30),
        'highest_bid_user_id' => $faker->numberBetween(1,30),
        'winner_id' => $faker->numberBetween(1,30)
    ];
});
