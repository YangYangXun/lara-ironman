<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Book::class, function (Faker $faker) {
    return [ 
        'name' => $faker->text(25),
        'author' => $faker->name,
        'price' => $faker->numberBetween(300, 2500),
        'publication_date' => $faker->dateTimeBetween('-10 year', '+9 month'),
    ];
});
