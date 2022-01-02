<?php

namespace App\Models\ccan\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin_Datin extends Model
{
    use HasFactory;

    protected $table = 'datin_ccan_tbl';
    protected $fillable = [
        'no_order', 'tgl_order', 'segment', 'customer_name', 'pic', 'alamat', 
        'order_type', 'bandwidth', 'sto_name', 'sn', 'vlan',
        'status_order', 'keterangan_status', 'deskripsi_order', 'qr_code', 'customer_tagging', 'redaman',
        'olt_name','olt_port','olt_ip','metro_name','metro_ip','metro_port','odc_name','odp_name','odp_tagging', 
        'product_name','nik','teknisi_name'
    ];

    
}
