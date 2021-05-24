<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Newmovie;
use Faker\Generator as Faker;

$factory->define(Newmovie::class, function (Faker $faker) {
    return [



            'title' => $faker -> word,

            'original_title'=> $faker -> word,

            'nationality'=> $faker -> state,

            'date'=> $faker -> date,

            'vote' => $faker -> randomFloat($nbMaxDecimals = 1, $min = 0, $max = 10),


    ];
});
