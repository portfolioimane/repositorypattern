<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Customer;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Customer::class, function (Faker $faker) {
    return [
    	'user_id'=>factory(User::class),
        'name' => $faker->name,
        'active'=>random_int(0, 1),
    ];
});
