<?php

use Faker\Generator as Faker;

$factory->define(App\Family::class, function (Faker $faker) {
    $vive = $faker->randomElement(['si','no']);
    $ocupacion = $faker->randomElement(['Pensionado','Jubilado','Estudiante','Ama de Casa','Empleado']);
    return [
        'aspirante_id' => \App\Aspirante::all()->random()->id,
        'nombre_familiar' => $faker->name.' '. $faker->lastName,
        'vive' => $vive,
        'direccion' => $faker->address,
        'ocupacion' => $ocupacion
    ];
});
