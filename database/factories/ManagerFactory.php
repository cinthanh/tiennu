<?php

use Faker\Generator as Faker;

$factory->define(\App\MedicineType::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->randomElement([
            'Thuốc Kháng Sinh',
            'Chuyên Hôi Nách',
            'Thuốc Trị Nghiện Coffee',
            'Thuốc trị nghiện Game',
            'Thuốc trị Ngủ Nướng'
        ])
    ];
});

$factory->define(\App\DiseaseTypes::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->randomElement([
            'Bệnh Nhân Phơi Nhiễm',
            'Bệnh nhân Đang Điều Trị',
            'Bệnh nhân kháng thuốc',
            'Bệnh Nhân tái Phát',
            'Đã Hết Bệnh'
        ])
    ];
});

$factory->define(\App\Patient::class, function (Faker $faker) {
    return [
        'name'          => $faker->name,
        'weight'        => $faker->numberBetween(10,150),
        'age'           => $faker->numberBetween(10,99),
        'phone'         => $faker->phoneNumber,
        'address'       => $faker->address,
        'disease_type_id' => \App\DiseaseTypes::all()->random()->id,
    ];
});

$factory->define(\App\Medicine::class, function (Faker $faker) {
    return [
        'medicine_type_id' => \App\MedicineType::all()->random()->id,
        'name'             => $faker->name,
        'name_code'             => $faker->randomElement(['SSH', 'CNA', 'FFC', 'KKH', 'LOL']),
        'qty_total'        => $faker->numberBetween(350,500)
    ];
});

$factory->define(\App\PatientMedicine::class, function (Faker $faker) {
    return [
        'patient_id'  => \App\Patient::all()->random()->id,
        'medicine_id' => \App\Medicine::all()->random()->id,
        'qty'         => $faker->numberBetween(10,60)
    ];
});