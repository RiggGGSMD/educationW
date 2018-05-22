<?php

use Faker\Generator as Faker;
use Carbon\Carbon;
$factory->define(App\Models\Appointment::class, function (Faker $faker) {

    $now = Carbon::now()->toDateTimeString();
    $end = Carbon::now()->addHour(6)->toDateTimeString();
    return [
        'Appointment_time' => $now,
        'Appointment_end' => $end,
        'created_at' => $now,
        'updated_at' => $now,

    ];
});
