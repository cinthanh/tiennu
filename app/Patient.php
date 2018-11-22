<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patients';

    public static function infoPatients()
    {
        return DB::select("
          SELECT
            patients.id AS patient_id, patients.name AS patient_name, disease_types.name AS loai_benh
            , disease_types.id AS loai_benh_id
            , patients.weight, patients.age, patients.phone
            ,GROUP_CONCAT(DISTINCT CONCAT(medicines.name_code,'(',patient_medicine.qty,')') SEPARATOR ', ') AS code_thuoc, SUM(patient_medicine.qty) AS qty
        FROM patients
        INNER JOIN disease_types ON patients.disease_type_id = disease_types.id
        INNER JOIN patient_medicine ON patients.id = patient_medicine.patient_id
        INNER JOIN medicines ON medicines.id = patient_medicine.medicine_id
        -- WHERE disease_types.id = 4
        GROUP BY patients.id");
    }
}
