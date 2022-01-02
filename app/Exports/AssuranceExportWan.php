<?php

namespace App\Exports;

use App\Models\wan\admin\Admin_Cnop;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithHeadings;

use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class AssuranceExportWan implements FromCollection, WithHeadings, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Admin_Cnop::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Incident',
            'Customer Name',
            'Summary',
            'Owner Group',
            'Assigned to',
            'External Ticket ID',
            'Customer Segment',
            'Top Priority',
            'Reported Date',
            'Lapul',
            'Gaul',
            'TTR Customer',
            'TTR Pending',
            'Status',
            'Workzone',
            'Actual Solution',
            'Incident Domain',
            'Note',
            'Alamat', 
            'Bandwidth', 
            'Site ID', 
            'Site Name', 
            'Link', 
            'SN', 
            'Vlan', 
            'Customer Tagging', 
            'Redaman',
            'Olt Name', 
            'Olt Port', 
            'Olt IP', 
            'Metro_name', 
            'Metro Port', 
            'Metro IP',
            'ODC Name', 
            'ODC Tagging', 
            'ODP Name', 
            'ODP Tagging', 
            'Status Assign', 
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
