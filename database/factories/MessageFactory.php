<?php

use Faker\Generator as Faker;
use \Nathan\Contact\Models\Message;

$factory->define(
    Message::class,
    function (Faker $faker) {
        return [
            'name'          => $faker->name,
            'email_address' => $faker->email,
            'phone_number'  => $faker->phoneNumber,
            'comment'       => $faker->paragraph
        ];
    }
);