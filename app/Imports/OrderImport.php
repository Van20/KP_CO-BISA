<?php

namespace App\Imports;

use App\User;
use App\Models\ccan\admin\Admin_Datin;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class OrderImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Admin_Datin([
            'deskripsi_order' => $row['8'] ?? '',
            'no_order' => $row['13'] ?? '',
            'product_name' => $row['17'] ?? '',
            'order_type' => $row['18'] ?? '',
            'tgl_order' => $row['19'] ?? '',
            'customer_name' => $row['23'] ?? '',
            'segment' => $row['24'] ?? '',
            'sto_name' => $row['27'] ?? '',
            'alamat' => $row['29'] ?? '',
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
