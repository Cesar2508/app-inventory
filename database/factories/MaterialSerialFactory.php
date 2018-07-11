<?php

use Faker\Generator as Faker;

$factory->define(App\MaterialSerial::class, function (Faker $faker) {
  static $size = 20;
    return [
        'size'   => $size++
    ];
});
