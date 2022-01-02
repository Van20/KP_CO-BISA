<?php

namespace App\Http\Controllers\wan;

use App\Models\wan\admin\Admin_Cnop;
use App\Models\wan\admin\Teknisi;
use App\Models\wan\admin\Jadwal_Teknisi;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\AssuranceImportWan;
use App\Exports\AssuranceExportWan;
use App\Imports\JadwalImportWan;
use App\Exports\JadwalExportWan;
use Maatwebsite\Excel\Facades\Excel;
use Session;
use Validator;

class AdminCnopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        // $all_order = Admin_Datin::join('datin_ccan_tbl', 'datin_ccan_tbl.nik', '=', 'teknisi_ccan_tbl.nik')
        //         ->select('datin_ccan_tbl.*')
        //         ->get();

        $all_tiket = DB::table('assurance_wan_tbl')
        ->select('assurance_wan_tbl.*', 'teknisi_wan_tbl.*')
        ->leftJoin('teknisi_wan_tbl', 'assurance_wan_tbl.nik', '=', 'teknisi_wan_tbl.nik')
        ->get();

        //$all_order = Admin_Datin::all();

        return view('/wan/admin/index_assurance_admin')->with('all_tiket', $all_tiket);
    }

    /**
     * Order Import function
     */
    public function order_import(Request $request)
    {
        if ($request->file('imported_file')) {
            Excel::import(new AssuranceImportWan(), request()->file('imported_file'));
            return back();
        }
    }

    public function order_export()
    {
        return Excel::download(new AssuranceExportWan(), 'assurance-wan.xlsx');
    }

    public function dashboard($nik)
    {
        $all_teknisi = DB::table('assurance_wan_tbl')
        ->where('assurance_wan_tbl.id',$nik)
        ->join('assurance_wan_tbl', 'teknisi_wan_tbl.nik', '=', 'assurance_wan_tbl.nik')
        ->select('assurance_wan_tbl.*', 'teknisi_wan_tbl.*')
        ->get();

        // $all_datin = DB::table('datin_ccan_tbl')
        // ->leftjoin('teknisi_ccan_tbl', 'datin_ccan_tbl.id', '=', 'teknisi_ccan_tbl.nik')
        // ->where('datin_ccan_tbl.nik' ,$nik)
        // ->select('datin_ccan_tbl.*', 'teknisi_ccan_tbl.*')
        // ->get();
        return view('/wan/admin/dashboard_admin', ['all_teknisi' => $all_teknisi]);
    }

    public function detail_teknisi()
    {
        $all_teknisi = Teknisi::all();
        return view('/wan/admin/detail_teknisi', ['all_teknisi' => $all_teknisi]);
    }

    public function detail_point($nik)
    {
        $all_teknisi = DB::table('teknisi_wan_tbl')
        ->where('assurance_wan_tbl.nik',$nik)
        ->join('assurance_wan_tbl', 'teknisi_wan_tbl.nik', '=', 'assurance_wan_tbl.nik')
        ->select('assurance_wan_tbl.*', 'teknisi_wan_tbl.*')
        ->get();

        // $all_datin = DB::table('datin_ccan_tbl')
        // ->leftjoin('teknisi_ccan_tbl', 'datin_ccan_tbl.id', '=', 'teknisi_ccan_tbl.nik')
        // ->where('datin_ccan_tbl.nik' ,$nik)
        // ->select('datin_ccan_tbl.*', 'teknisi_ccan_tbl.*')
        // ->get();
        return view('/wan/admin/detail_point', ['all_teknisi' => $all_teknisi]);
    }

    public function login()
    {
        return view('/wan/admin/login_page');
    }

    public function technician_login()
    {
        return view('/wan/technician/technician_login');
    }


    public function home_page()
    {
        return view('/wan/technician/home_page');
    }

    public function profile_page()
    {
        return view('/wan/technician/profile');
    }

    public function performansi_teknisi()
    {
        $all_teknisi = Teknisi::all();
        return view('/wan/admin/performansi_teknisi', ['all_teknisi' => $all_teknisi]);
    }

    public function jadwal_wan_import(Request $request)
    {
        if ($request->file('imported_file')) {
            Excel::import(new JadwalImportWan(), request()->file('imported_file'));
            return back();
        }
    }

    public function jadwal_wan_export()
    {
        return Excel::download(new JadwalExportWan(), 'jadwal-teknisi.xlsx');
    }

    public function jadwal_teknisi()
    {
        $all_teknisi = Jadwal_Teknisi::all();
        return view('/wan/admin/jadwal_teknisi', ['all_teknisi' => $all_teknisi]);
    }

    public function customer_data()
    {
        $data_customer = DB::table('assurance_wan_tbl')
        ->select('assurance_wan_tbl.*', 'teknisi_wan_tbl.*')
        ->leftJoin('teknisi_wan_tbl', 'assurance_wan_tbl.nik', '=', 'teknisi_wan_tbl.nik')
        ->get();

        // $all_datin = DB::table('datin_ccan_tbl')
        // ->leftjoin('teknisi_ccan_tbl', 'datin_ccan_tbl.id', '=', 'teknisi_ccan_tbl.nik')
        // ->where('datin_ccan_tbl.nik' ,$nik)
        // ->select('datin_ccan_tbl.*', 'teknisi_ccan_tbl.*')
        // ->get();
        return view('/wan/admin/customer_data', ['data_customer' => $data_customer]);
    }

    public function customer_data_tsel()
    {
        $list_data_telkomsel = DB::table('assurance_wan_tbl')
                ->select('assurance_wan_tbl.*', 'teknisi_wan_tbl.*')
                ->leftJoin('teknisi_wan_tbl', 'assurance_wan_tbl.nik', '=', 'teknisi_wan_tbl.nik')
                ->where('owner_grup', 'like', 'TIER1TELKOMSEL%')
                ->get();
        return view('/wan/admin/customer_data_tsel' , ['list_data_telkomsel' => $list_data_telkomsel]);
    }

    public function customer_data_olo()
    {
        $list_data_olo = DB::table('assurance_wan_tbl')
                ->select('assurance_wan_tbl.*', 'teknisi_wan_tbl.*')
                ->leftJoin('teknisi_wan_tbl', 'assurance_wan_tbl.nik', '=', 'teknisi_wan_tbl.nik')
                ->where('owner_grup', 'like', 'TIER1DWS%')
                ->get();
        return view('/wan/admin/customer_data_olo' , ['list_data_olo' => $list_data_olo]);
    }


    public function assign_order(Request $request)
    {
        DB::table('assurance_wan_tbl')
            ->where('id',$request->id)
            ->update([
                'nik' => $request->nik,
                'keterangan_status' => $request->keterangan_status,
                'deskripsi_order' => $request->deskripsi_order
            ]); 
            
        return redirect('/list_order_wan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $add_order = Admin_Cnop::all();
        return view('/wan/admin/add_tiket_wan', ['add_order' => $add_order]); //memanggil view form add site
        // Input::get('sto_name');
        // Input::get('status_order');
    }

    
    public function create_teknisi()
    {
        $add_teknisi = Teknisi::all();
        return view('/wan/admin/add_teknisi_wan', ['add_teknisi' => $add_teknisi]); //memanggil view form add site
        // Input::get('sto_name');
        // Input::get('status_order');
    }

    /**     
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // method untuk insert data ke table data_site
    public function store(Request $request)
    {
         // insert data ke table data_site
         DB::table('assurance_wan_tbl')->insert([
            'incident' => $request->incident,
            'customer_name' => $request->customer_name,
            'summary' => $request->summary,
            'owner_grup' => $request->owner_grup,
            'assigned_to' => $request->assigned_to,
            'external_ticket' => $request->external_ticket,
            'segment' => $request->segment,
            'top_priority' => $request->top_priority,
            'reported_date' => $request->reported_date,
            'lapul' => $request->lapul,
            'gaul' => $request->gaul,
            'ttr_customer' => $request->ttr_customer,
            'ttr_pending' => $request->ttr_pending,
            'status' => $request->status,
            'workzone' => $request->workzone,
            'actual_solution' => $request->actual_solution,
            'incident_domain' => $request->incident_domain,
            'note' => $request-> $note,
            'alamat' => $request->alamat,
            'bandwidth' => $request->bandwidth,
            'site_id' => $request->site_id,
            'site_name' => $request->site_name,
            'link' => $request->link,
            'sn' => $request->sn,
            'vlan' => $request->vlan,
            'customer_tagging' => $request->customer_tagging,
            'redaman' => $request->redaman,
            'olt_name' => $request->olt_name,
            'olt_port' => $request->olt_port,
            'olt_ip' => $request->olt_ip,
            'metro_name' => $request->metro_name,
            'metro_port' => $request->metro_port,
            'metro_ip' => $request->metro_ip,
            'odc_name' => $request->odc_name,
            'odc_tagging' => $request->odc_tagging,
            'odp_name' => $request->odp_name,
            'odp_tagging' => $request->odp_tagging,
            'status_assign' => $request->status_assign,
            'link' => $request->link,
            'updated_at' => $request->updated_at,
            'created_at' => $request->created_at
            ]
        );

        // alihkan halaman ke halaman /
        return redirect('/list_assurance_wan');
    }

    
    public function store_order_manual(Request $request)
    {
         // insert data ke table data_site
         DB::table('assurance_wan_tbl')->insert([
            'incident' => $request->incident,
            'customer_name' => $request->customer_name,
            'summary' => $request->summary,
            'owner_grup' => $request->owner_grup,
            'assigned_to' => $request->assigned_to,
            'external_ticket' => $request->external_ticket,
            'segment' => $request->segment,
            'top_priority' => $request->top_priority,
            'reported_date' => $request->reported_date,
            'lapul' => $request->lapul,
            'gaul' => $request->gaul,
            'ttr_customer' => $request->ttr_customer,
            'ttr_pending' => $request->ttr_pending,
            'status' => $request->status,
            'workzone' => $request->workzone,
            'actual_solution' => $request->actual_solution,
            'incident_domain' => $request->incident_domain,
            'note' => $request->note,
            'alamat' => $request->alamat,
            'bandwidth' => $request->bandwidth,
            'site_id' => $request->site_id,
            'site_name' => $request->site_name,
            'link' => $request->link,
            'sn' => $request->sn,
            'vlan' => $request->vlan,
            'customer_tagging' => $request->customer_tagging,
            'redaman' => $request->redaman,
            'olt_name' => $request->olt_name,
            'olt_port' => $request->olt_port,
            'olt_ip' => $request->olt_ip,
            'metro_name' => $request->metro_name,
            'metro_port' => $request->metro_port,
            'metro_ip' => $request->metro_ip,
            'odc_name' => $request->odc_name,
            'odc_tagging' => $request->odc_tagging,
            'odp_name' => $request->odp_name,
            'odp_tagging' => $request->odp_tagging,
            'status_assign' => $request->status_assign,
            'link' => $request->link,
            'updated_at' => $request->updated_at,
            'created_at' => $request->created_at
            ]
        );

        // alihkan halaman ke halaman /
        return redirect('/list_assurance_wan');
    }

    public function store_teknisi_manual(Request $request)
    {
         // insert data ke table teknisi_ccan_tbl
         DB::table('teknisi_wan_tbl')->insert([
            'nik' => $request->nik,
            'teknisi_name' => $request->teknisi_name,
            'no_hp' => $request->no_hp,
            'rank' => $request->rank,
            'point' => $request->point,
            'email' => $request->email,
            'tgl_lahir' => $request->tgl_lahir,
            'no_ktp' => $request->no_ktp
            ]
        );

        // alihkan halaman ke halaman /
        return redirect('/detail_teknisi');
    }

    public function store_jadwal_teknisi(Request $request)
    {
         // insert data ke table teknisi_wan_tbl
         DB::table('teknisi_wan_tbl')->insert([
            'tanggal' => $request->tanggal,
            'cholis' => $request->cholis,
            'bagus' => $request->bagus,
            'rendra' => $request->rendra,
            'tri' => $request->tri,
            'joelian' => $request->joelian,
            'erwanto' => $request->erwanto,
            'anas' => $request->anas,
            'warsito' => $request->warsito,
            'handy' => $request->handy,
            'amin' => $request->amin
            ]
        );

        // alihkan halaman ke halaman /
        return redirect('/jadwal_teknisi_wan');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // function untuk edit data order
    public function edit_assurance($id)
    { 
        $assurance_wan =DB::table('assurance_wan_tbl')->where('id',$id)->get();

        return view('/wan/admin/edit_assurance_wan',['assurance_wan' => $assurance_wan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_order(Request $request)
    {
        // update data site
        DB::table('assurance_wan_tbl')->where('id',$request->id)->update([
            'incident' => $request->incident,
            'customer_name' => $request->customer_name,
            'summary' => $request->summary,
            'owner_grup' => $request->owner_grup,
            'assigned_to' => $request->assigned_to,
            'external_ticket' => $request->external_ticket,
            'segment' => $request->segment,
            'top_priority' => $request->top_priority,
            'reported_date' => $request->reported_date,
            'lapul' => $request->lapul,
            'gaul' => $request->gaul,
            'ttr_customer' => $request->ttr_customer,
            'ttr_pending' => $request->ttr_pending,
            'status' => $request->status,
            'workzone' => $request->workzone,
            'actual_solution' => $request->actual_solution,
            'incident_domain' => $request->incident_domain,
            'note' => $request->note,
            'alamat' => $request->alamat,
            'bandwidth' => $request->bandwidth,
            'site_id' => $request->site_id,
            'site_name' => $request->site_name,
            'link' => $request->link,
            'sn' => $request->sn,
            'vlan' => $request->vlan,
            'customer_tagging' => $request->customer_tagging,
            'redaman' => $request->redaman,
            'olt_name' => $request->olt_name,
            'olt_port' => $request->olt_port,
            'olt_ip' => $request->olt_ip,
            'metro_name' => $request->metro_name,
            'metro_port' => $request->metro_port,
            'metro_ip' => $request->metro_ip,
            'odc_name' => $request->odc_name,
            'odc_tagging' => $request->odc_tagging,
            'odp_name' => $request->odp_name,
            'odp_tagging' => $request->odp_tagging,
            'status_assign' => $request->status_assign,
            'link' => $request->link,
            'updated_at' => $request->updated_at,
            'created_at' => $request->created_at
        ]);

        // alihkan halaman ke halaman /list_order
        return redirect('/list_assurance_wan');
    }

    public function update_data_customer_tsel(Request $request)
    {
        // update data customer 
        DB::table('assurance_wan_tbl')
        ->where('id',$request->id)
        ->update([
            'customer_name' => $request->customer_name,
            'site_id' => $request->site_id,
            'site_name' => $request->site_name,
            'link' => $request->link,
            'workzone' => $request->workzone,
            'bandwidth' => $request->bandwidth,
            'alamat' => $request->alamat,
            'customer_tagging' => $request->customer_tagging,
            'olt_name' => $request->olt_name,
            'olt_ip' => $request->olt_ip,
            'olt_port' => $request->olt_port,
            'metro_name' => $request->metro_name,
            'metro_ip' => $request->metro_ip,
            'metro_port' => $request->metro_port,
            'vlan' => $request->vlan,
            'sn' => $request->sn,
            'odc_name' => $request->odc_name,
            'odc_tagging' => $request->odc_tagging,
            'odp_name' => $request->odp_name,
            'odp_tagging' => $request->odp_tagging
        ]);
        // alihkan halaman ke halaman /customer_data
        
        return redirect('/customer_data_tsel');
    }

    public function update_data_customer_olo(Request $request)
    {
        // update data customer 
        DB::table('assurance_wan_tbl')
        ->where('id',$request->id)
        ->update([
            'customer_name' => $request->customer_name,
            'site_id' => $request->site_id,
            'site_name' => $request->site_name,
            'link' => $request->link,
            'workzone' => $request->workzone,
            'bandwidth' => $request->bandwidth,
            'alamat' => $request->alamat,
            'customer_tagging' => $request->customer_tagging,
            'olt_name' => $request->olt_name,
            'olt_ip' => $request->olt_ip,
            'olt_port' => $request->olt_port,
            'metro_name' => $request->metro_name,
            'metro_ip' => $request->metro_ip,
            'metro_port' => $request->metro_port,
            'vlan' => $request->vlan,
            'sn' => $request->sn,
            'odc_name' => $request->odc_name,
            'odc_tagging' => $request->odc_tagging,
            'odp_name' => $request->odp_name,
            'odp_tagging' => $request->odp_tagging
        ]);
        // alihkan halaman ke halaman /customer_data
        
        return redirect('/customer_data_olo');
    }
    
    

    public function update_jadwal_teknisi(Request $request)
    {
        // update data teknisi
        DB::table('jadwal_teknisi_wan_tbl')->where('id',$request->id)->update([
            'tanggal' => $request->tanggal,
            'cholis' => $request->cholis,
            'bagus' => $request->bagus,
            'rendra' => $request->rendra,
            'tri' => $request->tri,
            'joelian' => $request->joelian,
            'erwanto' => $request->erwanto,
            'anas' => $request->anas,
            'warsito' => $request->warsito,
            'handy' => $request->handy,
            'amin' => $request->amin
        ]);

        // alihkan halaman ke halaman /detail_teknisi
        return redirect('/jadwal_teknisi_wan');
    }

    public function update_teknisi(Request $request)
    {
        // update data teknisi
        DB::table('teknisi_wan_tbl')->where('id',$request->id)->update([
            'nik' => $request->nik,
            'teknisi_name' => $request->teknisi_name,
            'no_hp' => $request->no_hp,
            'rank' => $request->rank,
            'point' => $request->point,
            'email' => $request->email,
            'tgl_lahir' => $request->tgl_lahir,
            'no_ktp' => $request->no_ktp
        ]);

        // alihkan halaman ke halaman /detail_teknisi
        return redirect('/detail_teknisi_wan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_order($id)
    {
        // menghapus data site berdasarkan id yang dipilih
        DB::table('assurance_wan_tbl')->where('id',$id)->delete();
        
        // alihkan halaman ke halaman buku
        return redirect('/list_assurance_wan');
    }

    public function destroy_teknisi($nik)
    {
        // menghapus data site berdasarkan id yang dipilih
        DB::table('assurance_wan_tbl')->where('nik',$nik)->delete();
        
        // alihkan halaman ke halaman buku
        return redirect('/detail_teknisi_wan');
    }
    
}