<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Proposal::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->realText($maxNbChars = 30),
        'prepared_for' => $faker->name,
        'phone' => $faker->phoneNumber,
        'email' => $faker->safeEmail,
        'client_needs' => $faker->paragraph,
        'number_of_pages' => $faker->randomNumber($nbDigits = 2),
        'cms' => $faker->boolean($chanceOfGettingTrue = 50),
        'analytics' => $faker->boolean($chanceOfGettingTrue = 50),
        'hosting' => $faker->boolean($chanceOfGettingTrue = 50),
        'domain_name' => $faker->boolean($chanceOfGettingTrue = 50),
        'social_media' => $faker->boolean($chanceOfGettingTrue = 50),
        'logo' => $faker->boolean($chanceOfGettingTrue = 50),
        'mailing_list' => $faker->boolean($chanceOfGettingTrue = 50),
        'facebook_profile' => $faker->boolean($chanceOfGettingTrue = 50),
        'e_commerce' => $faker->boolean($chanceOfGettingTrue = 50),
        'sitemap' => $faker->imageUrl($width = 640, $height = 480),
        'total_time' => $faker->randomNumber($nbDigits = 2),
        'discount_percentage' => $faker->randomNumber($nbDigits = 4),
        'discount_dollar' => $faker->randomNumber($nbDigits = 4),
        'additional_cost' => $faker->randomNumber($nbDigits = 4),
    ];
});

$factory->define(App\Page::class, function (Faker\Generator $faker) {
    return [
        'page_title' => $faker->realText($maxNbChars = 30),
    ];
});
