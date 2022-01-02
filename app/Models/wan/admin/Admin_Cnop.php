<?php

namespace App\Models\wan\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin_Cnop extends Model
{
    use HasFactory;

    protected $table = 'assurance_wan_tbl';
    protected $fillable = [
        'incident', 'customer_name', 'summary', 'owner_grup', 'assigned_to', 'external_ticket', 
        'segment', 'top_priority', 'reported_date', 'lapul', 'gaul', 'ttr_customer',
        'ttr_pending', 'status', 'workzone', 'actual_solution', 'incident_domain', 'note',
        'alamat', 'bandwidth', 'sn', 'vlan', 'customer_tagging', 'redaman',
        'olt_name', 'olt_port', 'olt_ip', 'metro_name', 'metro_port', 'metro_ip',
        'odc_name', 'odc_tagging', 'odp_name', 'odp_tagging', 'status_assign'
    ];
}
