<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Utilisateur::class, function (Faker $faker) {
    return [
        'code_Utl' => Str::random(10),
        'nom_Utl' => Str::random(10),
        'prenom_Utl' => Str::random(10),
        'mot_passe' => Str::random(10),
        'etat_id' => mt_rand(1, 2),
        'direction_id' => mt_rand(1, 5),
        'structure_id' => mt_rand(1, 5),
        'privilege_id' => mt_rand(1, 3),
        'profil_id' => mt_rand(1, 4),
    ];
});