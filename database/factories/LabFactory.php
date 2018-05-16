<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Models\Lab::class, function (Faker $faker) {

    $now = Carbon::now()->toDateTimeString();
    return [
        'lab_name' => $faker->name,
        'lab_located' => $faker->sentence(),
        'created_at' => $now,
        'updated_at' => $now,

    ];
});
