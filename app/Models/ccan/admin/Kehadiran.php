<?php

namespace App\Models\ccan\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kehadiran extends Model
{
    use HasFactory;

    protected $table = 'kehadiran';
    protected $guarded = [];
    protected $hidden = ['created_at', 'updated_at'];

    // Relations

    public function teknisi()
    {
        return $this->belongsTo(Teknisi::class, 'nik', 'nik');
    }

    public function order()
    {
        return $this->belongsTo(Admin_Datin::class, 'nik', 'nik');
    }
}