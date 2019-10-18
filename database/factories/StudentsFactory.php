<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
      'name' => $faker -> name('male'|'female'),
      'email' => $faker -> email,
      'password' => md5('123456'),
      'role' => $faker -> randomElement($array = array ('teacher','student')),
      'address' => $faker -> address,
      'contact' => $faker -> e164PhoneNumber,
      'fee' => $faker -> numberBetween($min = 1000, $max = 9000),
      'birth_date' => $faker -> date($format = 'Y-m-d', $max = 'now'),
      'ip_address' => $faker -> ipv4
    ];
});
