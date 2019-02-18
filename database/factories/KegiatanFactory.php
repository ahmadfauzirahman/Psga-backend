<?php

use Faker\Generator as Faker;

$factory->define(\App\Kegiatan::class, function (Faker $faker) {
    return [
        //
        'kegNamaAcara' => $faker->sentence(3),
        'kegWaktu' => $faker->dateTime(),
        'kegTempat' => $faker->sentence(3),
        'kegPenyelenggara' => $faker->name(),
        'kegPengisi' => $faker->name,
        'kegKeterangan' => $faker->sentence(10),
        'kegFoto' => $faker->sentence('2'),
        'status' => 'Draft'
    ];
});
