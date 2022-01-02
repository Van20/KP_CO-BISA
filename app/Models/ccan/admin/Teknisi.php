<?php

namespace App\Models\ccan\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teknisi extends Model
{
    use HasFactory;

    protected $table = 'teknisi_ccan_tbl';
    protected $fillable = [
        'nik', 'name', 'no_hp', 'rank', 'point', 'email', 
        'tgl_lahir', 'no_ktp'
    ];
}
