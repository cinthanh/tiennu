<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $medicineTypes = factory(\App\MedicineType::class, 5)->create();
        $diseaseTypes = factory(\App\DiseaseTypes::class, 5)->create();
        $patient = factory(\App\Patient::class, 100)->create();
        $medicine = factory(\App\Medicine::class, 10)->create();
        $patientMedicine = factory(\App\PatientMedicine::class, 300)->create();
    }
}
