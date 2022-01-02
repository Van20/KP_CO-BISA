<?php

namespace App\Imports;

use App\User;
use App\Models\ccan\admin\Jadwal_Teknisi;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class JadwalImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Jadwal_Teknisi([
            'tanggal' => $row['0'] ?? '',
            'fatkhurokhman' => $row['1'] ?? '',
            'dennis' => $row['2'] ?? '',
            'hanifan' => $row['3'] ?? '',
            'jefri' => $row['4'] ?? '',
            'rycco' => $row['5'] ?? '',
            'manaf' => $row['6'] ?? '',
            'aris' => $row['7'] ?? '',
            'irsan' => $row['8'] ?? '',
            'husni' => $row['9'] ?? '',
            'yudivan' => $row['10'] ?? '',
            'barok' => $row['11'] ?? '',
            'wisnu' => $row['12'] ?? '',
        ]);
    }

    // public function rules(): array
    // {
    //     return [
    //         '8' => Rule::in(['Review Order TSQ Metro Manual']),

    //          // Above is alias for as it always validates in batches
    //          '*.8' => Rule::in(['Review Order TSQ Metro Manual']),
             
    //          // Can also use callback validation rules
    //          '8' => function($attribute, $value, $onFailure) {
    //               if ($value !== 'Review Order TSQ Metro Manual') {
    //                    $onFailure('Review Order is not TSQ Metro Manual');
    //               }
    //           }
    //     ];
    // }

    
    public function startRow(): int
    {
        return 2;
    }
}
