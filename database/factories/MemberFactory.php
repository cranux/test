<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Member::class, function (Faker $faker) {
    return [
        'name' => $faker->name,

        'email' => $faker->unique()->safeEmail,
        'credit1' => rand(1111,9999),
        'credit2' => rand(2222,9999),
        'imgurl' => $faker->imageUrl(),
        'content' => $faker->paragraph,

        'password' => '$2y$10$k1m9NuWnIEvSmeSeBcCBB.VYuGCEYYrs2lksqzafe480.oQ0Fspnq', // secret

    ];
});
