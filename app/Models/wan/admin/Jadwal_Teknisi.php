<?php

namespace App\Models\wan\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal_Teknisi extends Model
{
    use HasFactory;

    protected $table = 'jadwal_teknisi_wan_tbl';
    protected $fillable = [
        'tanggal', 'cholis', 'bagus', 'rendra', 'tri', 'joelian', 
        'erwanto', 'anas', 'warsito', 'handy', 'amin'
    ];
}
