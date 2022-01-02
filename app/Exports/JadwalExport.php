<?php

namespace App\Exports;

use App\Models\ccan\admin\Jadwal_Teknisi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithHeadings;

use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class JadwalExport implements FromCollection, WithHeadings, WithStyles
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
            'FATKHUROKHMAN',
            'DENNIS BAGUS SATRIA',
            'MOCHAMAD HANIFAN',
            'MOCHAMMAD JEFRI',
            'RYCCO PERMANA SAPUTRA',
            'MIFTACHUL CHUSNUL MANAF',
            'MUCHAMAD ARIS SETIAWAN',
            'MUHAMMAD NOVRIZAL IRSAN',
            'HUSNI D. D. AL MUBAROK',
            'YUDIVAN ILHAM SANTOSO',
            'MUHAMMAD NUR MUBAROK',
            'WISNU HERNINDYA',
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
