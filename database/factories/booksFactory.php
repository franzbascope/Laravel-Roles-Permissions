<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\books;
use Faker\Generator as Faker;

$factory->define(books::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'email_author' => $faker->word,
        'publication_year' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
