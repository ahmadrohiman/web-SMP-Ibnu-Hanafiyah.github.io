<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Implementations\QueryBuilderImplementation;

class SchoolYearsRepository extends QueryBuilderImplementation
{

    public $fillable = ['years', 'number_of_registrans'];

    public function __construct()
    {
        $this->table = 'school_years';
        $this->pk = 'id';
    }

    public function predictNextYearRegistration()
{
    // Ambil data tahun dan jumlah pendaftaran
    $data = DB::table($this->table)
        ->select('years', 'number_of_registrans')
        ->orderBy('years', 'asc')
        ->get();

    // Ubah data menjadi array untuk regresi linier
    $years = [];
    $registrants = [];

    foreach ($data as $row) {
        $years[] = $row->years;
        $registrants[] = $row->number_of_registrans;
    }

    // Pastikan ada cukup data untuk regresi linier
    if (count($years) < 2) {
        return [
            'error' => 'Data tidak cukup untuk melakukan prediksi.'
        ];
    }

    // Hitung rata-rata X (tahun) dan Y (jumlah pendaftaran)
    $meanX = array_sum($years) / count($years);
    $meanY = array_sum($registrants) / count($registrants);

    // Hitung b (kemiringan garis)
    $numerator = 0;
    $denominator = 0;

    for ($i = 0; $i < count($years); $i++) {
        $numerator += ($years[$i] - $meanX) * ($registrants[$i] - $meanY);
        $denominator += pow(($years[$i] - $meanX), 2);
    }

    // Cek apakah denominator bernilai nol
    if ($denominator == 0) {
        return [
            'error' => 'Tidak dapat melakukan regresi linier karena variasi dalam data tahun nol.'
        ];
    }

    // Hitung b (kemiringan garis) dan a (intercept)
    $b = $numerator / $denominator;
    $a = $meanY - ($b * $meanX);

    // Prediksi untuk tahun berikutnya
    $nextYear = max($years) + 1;
    $predictedRegistrants = $a + ($b * $nextYear);

    return [
        'next_year' => $nextYear,
        'predicted_registrants' => round($predictedRegistrants)
    ];
}

}
