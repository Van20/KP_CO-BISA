<?php

namespace App\Http\Controllers\ccan;

use App\Models\ccan\admin\Admin_Datin;
use App\Models\ccan\admin\Teknisi;
use App\Models\ccan\admin\Jadwal_Teknisi;
use App\Models\ccan\admin\Kehadiran;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\OrderImport;
use App\Exports\OrderExport;
use App\Imports\JadwalImport;
use App\Exports\JadwalExport;
use Maatwebsite\Excel\Facades\Excel;
use Session;
use Validator;

class AdminDatinController extends Controller
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

        $all_order = DB::table('datin_ccan_tbl')
        
        ->select('datin_ccan_tbl.*', 'datin_ccan_tbl.*')
        ->leftJoin('teknisi_ccan_tbl', 'datin_ccan_tbl.id', '=', 'teknisi_ccan_tbl.nik')
        ->where('deskripsi_order', 'like', '%TSQ%')
        ->get();

        //$all_order = Admin_Datin::all();
        return view('/ccan/admin/index_datin_admin')->with('all_order', $all_order);
    }

    /**
     * Order Import function
     */
    public function order_import(Request $request)
    {
        if ($request->file('imported_file')) {
            Excel::import(new OrderImport(), request()->file('imported_file'));
            return back();
        }
    }

    public function order_export()
    {
        return Excel::download(new OrderExport(), 'order-datin.xlsx');
    }

    public function dashboard()
    {
        
        $kehadiran = Kehadiran::whereDate('tanggal', date('Y-m-d'))
        ->where('hadir', true)
        ->get();

        return view('/ccan/admin/dashboard_admin', ['kehadiran' => $kehadiran]);
    }

    public function detail_teknisi()
    {
        $all_teknisi = Teknisi::all();
        return view('/ccan/admin/detail_teknisi', ['all_teknisi' => $all_teknisi]);
    }

    public function detail_point($nik)
    {
        $all_teknisi = DB::table('teknisi_ccan_tbl')
        ->where('datin_ccan_tbl.nik',$nik)
        ->join('datin_ccan_tbl', 'teknisi_ccan_tbl.nik', '=', 'datin_ccan_tbl.nik')
        ->select('datin_ccan_tbl.*', 'teknisi_ccan_tbl.*')
        ->get();

        // $all_datin = DB::table('datin_ccan_tbl')
        // ->leftjoin('teknisi_ccan_tbl', 'datin_ccan_tbl.id', '=', 'teknisi_ccan_tbl.nik')
        // ->where('datin_ccan_tbl.nik' ,$nik)
        // ->select('datin_ccan_tbl.*', 'teknisi_ccan_tbl.*')
        // ->get();
        return view('/ccan/admin/detail_point', ['all_teknisi' => $all_teknisi]);
    }

    public function login()
    {
        return view('/ccan/admin/login_page');
    }

    public function profile_page()
    {
        return view('/ccan/technician/profile');
    }
    
    public function form_order_close($id)
    {
        $all_order = DB::table('datin_ccan_tbl')
        ->where('datin_ccan_tbl.id',$id)
        ->get();

        //$all_order = Admin_Datin::all();
        return view('/ccan/technician/form_order_close',['all_order' => $all_order]);
    }

    public function form_order_reject()
    {
        return view('/ccan/technician/form_order_reject');
    }
    public function form_profile()
    {
        return view('/ccan/technician/form_profile');
    }

    public function order($id)
    {
        $all_order = DB::table('teknisi_ccan_tbl')
        ->where('datin_ccan_tbl.nik',$id)
        ->where('keterangan_status', 'like', '%Assigned%')
        ->where('status_order', 'not like', '%Close%')
        ->join('datin_ccan_tbl', 'teknisi_ccan_tbl.nik', '=', 'datin_ccan_tbl.nik')
        ->select('datin_ccan_tbl.*', 'datin_ccan_tbl.*')
        ->get();

        //$all_order = Admin_Datin::all();
        return view('/ccan/technician/order',['all_order' => $all_order]);
    }


    public function home_page()
    {
        return view('/ccan/technician/home_page');
    }
    
    public function performansi_teknisi()
    {
        $all_teknisi = DB::table('teknisi_ccan_tbl')

        ->select('*')
        ->orderBy('point','desc')
        ->get();

        return view('/ccan/admin/performansi_teknisi', ['all_teknisi' => $all_teknisi]);
    }

    public function jadwal_ccan_import(Request $request)
    {
        if ($request->file('imported_file')) {
            Excel::import(new JadwalImport(), request()->file('imported_file'));
            return back();
        }
    }

    public function jadwal_ccan_export()
    {
        return Excel::download(new JadwalExport(), 'jadwal-teknisi.xlsx');
    }

    public function jadwal_teknisi()
    {
        $all_teknisi = Jadwal_Teknisi::all();
        return view('/ccan/admin/jadwal_teknisi', ['all_teknisi' => $all_teknisi]);
    }

    public function customer_data()
    {
        $data_customer = DB::table('teknisi_ccan_tbl')
        ->join('datin_ccan_tbl', 'teknisi_ccan_tbl.nik', '=', 'datin_ccan_tbl.nik')
        ->select('datin_ccan_tbl.*', 'teknisi_ccan_tbl.*')
        ->get();

        // $all_datin = DB::table('datin_ccan_tbl')
        // ->leftjoin('teknisi_ccan_tbl', 'datin_ccan_tbl.id', '=', 'teknisi_ccan_tbl.nik')
        // ->where('datin_ccan_tbl.nik' ,$nik)
        // ->select('datin_ccan_tbl.*', 'teknisi_ccan_tbl.*')
        // ->get();
        return view('/ccan/admin/customer_data', ['data_customer' => $data_customer]);
    }

    public function assign_order(Request $request)
    {
        DB::table('datin_ccan_tbl')
            ->where('id',$request->id)
            ->update([
                'nik' => $request->nik,
                'keterangan_status' => $request->keterangan_status,
                'note_assign' => $request->note_assign
            ]); 
            
        return redirect('/list_order');
    }

    public function update_close_order(Request $request)
    {
        DB::table('datin_ccan_tbl')
            ->where('id',$request->id)
            ->update([
                'sn' => $request->sn,
                'olt_ip' => $request->olt_ip,
                'olt_name' => $request->olt_name,
                'redaman' => $request->redaman,
                'odc_name' => $request->odc_name,
                'odp_name' => $request->odp_name,
                'odp_tagging' => $request->odp_tagging,
                'qr_code' => $request->qr_code,
                'note_assign' => $request->note_assign,
                'status_order' => $request->status_order
            ]); 
            
        return redirect('/list_order');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $add_order = Admin_Datin::all();
        return view('/ccan/admin/add_order_datin', ['add_order' => $add_order]); //memanggil view form add site
        // Input::get('sto_name');
        // Input::get('status_order');
    }

    
    public function create_teknisi()
    {
        $add_teknisi = Teknisi::all();
        return view('/ccan/admin/add_teknisi_datin', ['add_teknisi' => $add_teknisi]); //memanggil view form add site
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
         DB::table('datin_ccan_tbl')->insert([
            'no_order' => $request->no_order,
            'tgl_order' => $request->tgl_order,
            'segment' => $request->segment,
            'customer_name' => $request->customer_name,
            'pic' => $request->pic,
            'alamat' => $request->alamat,
            'order_type' => $request->order_type,
            'bandwidth' => $request->bandwidth,
            'sto_name' => $request->sto_name,
            'sn' => $request->sn,
            'vlan' => $request->vlan,
            'status_order' => $request->status_order,
            'keterangan_status' => $request->keterangan_status,
            'deskripsi_order' => $request->deskripsi_order,
            'qr_code' => $request->qr_code,
            'customer_tagging' => $request->customer_tagging,
            'redaman' => $request->redaman,
            'olt_name' => $request->olt_name,
            'olt_port' => $request->olt_port,
            'olt_ip' => $request->olt_ip,
            'metro_name' => $request->metro_name,
            'odc_name' => $request->odc_name,
            'odp_name' => $request->odp_name,
            'nik' => $request->nik,
            'odp_tagging' => $request->odp_tagging,
            'note_assign' => $request->note_assign
            ]
        );

        // alihkan halaman ke halaman /
        return redirect('/list_order');
    }

    
    public function store_order_manual(Request $request)
    {
         // insert data ke table data_site
         DB::table('datin_ccan_tbl')->insert([
         'order_type' => $request->order_type,
         'no_order' => $request->no_order,
         'tgl_order' => $request->tgl_order,
         'customer_name' => $request->customer_name,
         'alamat' => $request->alamat,
         'pic' => $request->pic,
         'bandwidth' => $request->bandwidth,
         'deskripsi_order' => $request->deskripsi_order,
         'sto_name' => $request->sto_name,
         'nik' => $request->nik,
         'status_order' => $request->status_order
            ]
        );

        // alihkan halaman ke halaman /
        return redirect('/list_order');
    }

    public function store_teknisi_manual(Request $request)
    {
         // insert data ke table teknisi_ccan_tbl
         DB::table('teknisi_ccan_tbl')->insert([
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
         // insert data ke table teknisi_ccan_tbl
         DB::table('teknisi_ccan_tbl')->insert([
            'tanggal' => $request->tanggal,
            'fatkhurokhman' => $request->fatkhurokhman,
            'dennis' => $request->dennis,
            'hanifan' => $request->hanifan,
            'jefri' => $request->jefri,
            'rycco' => $request->rycco,
            'manaf' => $request->manaf,
            'aris' => $request->aris,
            'irsan' => $request->irsan,
            'husni' => $request->husni,
            'yudivan' => $request->yudivan,
            'barok' => $request->barok,
            'wisnu' => $request->wisnu
            ]
        );

        // alihkan halaman ke halaman /
        return redirect('/jadwal_teknisi');
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
    public function edit_order($id)
    { 
        $datin_ccan =DB::table('datin_ccan_tbl')->where('id',$id)->get();

        return view('/ccan/admin/edit_order_datin',['datin_ccan' => $datin_ccan]);
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
        DB::table('datin_ccan_tbl')->where('id',$request->id)->update([
            'no_order' => $request->no_order,
            'tgl_order' => $request->tgl_order,
            'order_type' => $request->order_type,
            'segment' => $request->segment,
            'bandwidth' => $request->bandwidth,
            'sto_name' => $request->sto_name,
            'status_order' => $request->status_order,
            'deskripsi_order' => $request->deskripsi_order,
            'customer_name' => $request->customer_name,
            'alamat' => $request->alamat,
            'customer_tagging' => $request->customer_tagging,
            'pic' => $request->pic,
            'qr_code' => $request->qr_code,
            'sn' => $request->sn,
            'vlan' => $request->vlan,
            'keterangan_status' => $request->keterangan_status,
            'redaman' => $request->redaman,
            'olt_name' => $request->olt_name,
            'olt_port' => $request->olt_port,
            'olt_ip' => $request->olt_ip,
            'metro_name' => $request->metro_name,
            'odc_name' => $request->odc_name,
            'odp_name' => $request->odp_name,
            'odp_tagging' => $request->odp_tagging,
            'note_assign' => $request->note_assign
        ]);

        // alihkan halaman ke halaman /list_order
        return redirect('/list_order');
    }

    public function update_jadwal_teknisi(Request $request)
    {
        // update data teknisi
        DB::table('jadwal_teknisi_ccan_tbl')->where('id',$request->id)->update([
            'tanggal' => $request->tanggal,
            'fatkhurokhman' => $request->fatkhurokhman,
            'dennis' => $request->dennis,
            'hanifan' => $request->hanifan,
            'jefri' => $request->jefri,
            'rycco' => $request->rycco,
            'manaf' => $request->manaf,
            'aris' => $request->aris,
            'irsan' => $request->irsan,
            'husni' => $request->husni,
            'yudivan' => $request->yudivan,
            'barok' => $request->barok,
            'wisnu' => $request->wisnu
        ]);

        // alihkan halaman ke halaman /detail_teknisi
        return redirect('/jadwal_teknisi');
    }

    public function update_teknisi(Request $request)
    {
        // update data teknisi
        DB::table('teknisi_ccan_tbl')->where('id',$request->id)->update([
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
        return redirect('/detail_teknisi');
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
        DB::table('datin_ccan_tbl')->where('id',$id)->delete();
        
        // alihkan halaman ke halaman buku
        return redirect('/list_order');
    }

    public function destroy_teknisi($nik)
    {
        // menghapus data site berdasarkan id yang dipilih
        DB::table('teknisi_ccan_tbl')->where('nik',$nik)->delete();
        
        // alihkan halaman ke halaman buku
        return redirect('/detail_teknisi');
    }
    
}