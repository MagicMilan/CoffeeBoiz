<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [

        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = 'secret',
        'name' => $faker->name,
        'dob' => new DateTime(),
        'address' => $faker->name . "straat 1",
        'place' => $faker->name . ' City',
        'zip' => '1900 aa',
        'phone_nr' => '0612345678',
    ];
});
