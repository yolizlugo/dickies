<?php

use Faker\Generator as Faker;

$factory->define(App\Aspirante::class, function (Faker $faker) {
    $place = $faker->randomElement(['Parras','Saltillo','Gral, Cepeda','Monterrey','San Francisco','Arteaga']);
    $genero = $faker->randomElement(['Masculino','Femenino']);
    $vives_con = $faker->randomElement(['Padres','Conyuge','Hijos','Amigos','Parientes','Solo']);
    $estado_civil = $faker->randomElement(['Casado','Soltero','Divorciado']);
    return [
        'nombre' => $faker->name,
        'ap_paterno'=> $faker->lastName,
        'ap_materno'=> $faker->lastName,
        'edad'=> $faker->numberBetween($min = 24, $max = 45),
        'domicilio'=> $faker->address,
        'colonia'=> $faker->streetAddress,
        'cp' => $faker->numberBetween($min = 27980, $max = 29790),
        'celular'=> $faker->phoneNumber,
        'lugar_nac'=> $place,
        'fecha_nac'=> $faker->date($format = 'Y-m-d', $max = '1993-12-30'),
        'pais'=> $faker->unique()->country,
        'genero'=> $genero,
        'vives_con'=> $vives_con,
        'estatura'=> $faker->randomFloat($nbMaxDecimals = 2, $min = 1.60, $max = 2),
        'peso' => $faker->numberBetween($min = 55, $max = 100),
        'estado_civil'=> $estado_civil,
        'curp'=> str_random(16),
    ];
});
