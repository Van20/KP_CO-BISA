<?php

namespace App\Models\ccan\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal_Teknisi extends Model
{
    use HasFactory;

    protected $table = 'jadwal_teknisi_ccan_tbl';
    protected $fillable = [
        'tanggal', 'fatkhurokhman', 'dennis', 'hanifan', 'jefri', 'rycco', 
        'manaf', 'aris', 'irsan', 'husni', 'yudivan',
        'barok', 'wisnu'
    ];
}
