<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Fournisseur::class, function (Faker $faker) {
    return [
        'nom' => Str::random(10),
        'abreviation' => Str::random(10),
        'adresse' => Str::random(10),
        'numero_compte' => Str::random(10),
        'numero_tel' => Str::random(10),
        'numero_fax' => Str::random(10),
        'email' => Str::random(10) . '@gmail.com',
    ];
});