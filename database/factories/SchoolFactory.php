<?php

use Faker\Generator as Faker;

$factory->define(App\School::class, function (Faker $faker) {
    $titulado = $faker->randomElement(['si','no']);
    return [
        'aspirante_id' => \App\Aspirante::all()->random()->id,
        'name_school' => $faker->sentence(6),
        'fecha_inicio' => $faker->date($format = 'Y-m-d', $min='-1 years'),
        'fecha_termino' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'address_school' => $faker->address,
        'certificado' => $titulado
    ];
});
