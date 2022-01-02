<?php

namespace App\Exports;

use App\Models\wan\admin\Jadwal_Teknisi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithHeadings;

use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class JadwalExportWan implements FromCollection, WithHeadings, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Jadwal_Teknisi::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'TANGGAL',
            'M NUR CHOLIS SETIAWAN',
            'BAGUS ANDYANTO',
            'RENDRA PRAHASTA',
            'TRI SUTRISNO',
            'JOELIAN CHRISNANTO',
            'ERWANTO',
            'KERY ANAS RISKIANTO',
            'WARSITO',
            'M. HANDY SYAIFULLOH',
            'MOCH. ROSICHOL AMIN',
            'CRATED AT',
            'UPDATED AT',
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
