<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Utilisateur::class, function (Faker $faker) {
    return [
        'code_Utl' => Str::random(10),
        'nom_Utl' => Str::random(10),
        'prenom_Utl' => Str::random(10),
        'etat_Utl' => mt_rand(0, 1),
        'direction_id' => mt_rand(1, 5),
        'structure_id' => mt_rand(1, 5),
        'privilege_id' => mt_rand(1, 3),
        'profil_id' => mt_rand(1, 4),
    ];
});