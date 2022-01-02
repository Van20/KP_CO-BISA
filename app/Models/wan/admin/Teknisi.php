<?php

namespace App\Models\wan\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teknisi extends Model
{
    use HasFactory;

    protected $table = 'teknisi_wan_tbl';
    protected $fillable = [
        'nik', 'teknisi_name', 'no_hp', 'rank', 'point', 'email', 
        'tgl_lahir', 'no_ktp', 'username_mysol', 'password_mysol'
    ];
}
