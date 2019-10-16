<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Employee;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'name' => $faker -> unique() -> firstName(),
        'lastname' => $faker -> unique() -> lastName (),
        'birthday' => $faker -> dateTimeBetween('-65 years', 'now - 20 years')->format('Y-m-d'),
        'jobtitle' => $faker -> jobTitle(),
        'salary' => $faker -> randomFloat(2, 1, 9)
    ];
});
