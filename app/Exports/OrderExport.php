<?php

namespace App\Exports;

use App\Models\ccan\admin\Admin_Datin;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithHeadings;

use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class OrderExport implements FromCollection, WithHeadings, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Admin_Datin::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'No Order',
            'Tgl Order',
            'Segment',
            'Customer Name',
            'Contact PIC',
            'Alamat',
            'Order Type',
            'Bandwidth',
            'STO',
            'SN Ont',
            'Vlan',
            'Status Order',
            'Keterangan Status',
            'Deskripsi Order',
            'QR Code',
            'Customer Tagging',
            'Redaman',
            'OLT Name',
            'OLT Port',
            'OLT IP',
            'Metro Name',
            'Metro IP',
            'Metro Port',
            'ODC Name',
            'ODP Name',
            'ODP Tagging',
            'NIK Satu',
            'NIK Dua',
            'Product Name',
            'Updated At',
            'Created At',
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text.
            1    => ['font' => ['bold' => true]],
        ];
    }
}
