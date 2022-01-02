<?php

namespace App\Imports;

use App\User;
use App\Models\wan\admin\Admin_Cnop;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class AssuranceImportWan implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Admin_Cnop([
            'incident' => $row['0'] ?? '',
            'customer_name' => $row['1'] ?? '',
            'summary' => $row['5'] ?? '',
            'owner_grup' => $row['6'] ?? '',
            'assigned_to' => $row['12'] ?? '',
            'external_ticket' => $row['18'] ?? '',
            'segment' => $row['22'] ?? '',
            'top_priority' => $row['29'] ?? '',
            'reported_date' => $row['37'] ?? '',
            'lapul' => $row['38'] ?? '',
            'gaul' => $row['39'] ?? '',
            'ttr_customer' => $row['40'] ?? '',
            'ttr_pending' => $row['46'] ?? '',
            'status' => $row['48'] ?? '',
            'workzone' => $row['54'] ?? '',
            'actual_solution' => $row['59'] ?? '',
            'incident_domain' => $row['60'] ?? '',
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
