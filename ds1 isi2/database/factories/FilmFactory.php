<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\modele\Film;
use Faker\Generator as Faker;

$factory->define(Film::class, function (Faker $faker) {
    return [
        'titre' => $faker->lastName,
        'anneeSortie' => $faker->year($max = 'now'),
        'description' => $faker->sentence(10, true),
        'categorie_id' => $faker->numberBetween(1, 10),
    ];
});
