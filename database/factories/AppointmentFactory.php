<?php

use Faker\Generator as Faker;
use Carbon\Carbon;
$factory->define(App\Models\Appointment::class, function (Faker $faker) {

    $now = Carbon::now()->toDateTimeString();
    $time_start = $faker->dateTimeThisMonth($now);
    $time_end = $faker->dateTimeThisMonth($time_start);
    return [
        'Appointment_time' => $time_start,
        'Appointment_end' => $time_end,
        'created_at' => $now,
        'updated_at' => $now,

    ];
});
